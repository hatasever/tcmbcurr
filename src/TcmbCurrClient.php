<?php

namespace Hatasever\TcmbCurr;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Handler\CurlHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Request as Psr7Request;
use GuzzleHttp\Psr7\Response as Psr7Response;
use Hatasever\TcmbCurr\Models\CurrencyTCMB;
use Hatasever\TcmbCurr\Models\currencyType;

class TcmbCurrClient
{
    const API_URL = "https://evds2.tcmb.gov.tr/service/evds";

    protected $client;
    protected $headers;
    protected $appId;
    protected $restApiKey;
    protected $userAuthKey;
    protected $additionalParams;

    /**
     * @var bool
     */
    public $requestAsync = false;

    /**
     * @var int
     */
    public $maxRetries = 2;

    /**
     * @var int
     */
    public $retryDelay = 500;

    /**
     * @var Callable
     */
    private $requestCallback;

    /**
     * Turn on, turn off async requests
     *
     * @param bool $on
     * @return $this
     */
    public function async($on = true)
    {
        $this->requestAsync = $on;
        return $this;
    }

    /**
     * Callback to execute after OneSignal returns the response
     * @param Callable $requestCallback
     * @return $this
     */
    public function callback(Callable $requestCallback)
    {
        $this->requestCallback = $requestCallback;
        return $this;
    }

    /**
     * @param $appId
     * @param $restApiKey
     * @param $userAuthKey
     * @param int $guzzleClientTimeout
     */
    public function __construct($guzzleClientTimeout = 0)
    {
        $this->appId = env("TCMB_APP_ID");

        $this->client = new Client([
            'handler' => $this->createGuzzleHandler(),
            'timeout' => $guzzleClientTimeout,
        ]);
        $this->headers = ['headers' => []];
        $this->additionalParams = [];
    }

    private function createGuzzleHandler() {
        return tap(HandlerStack::create(new CurlHandler()), function (HandlerStack $handlerStack) {
            $handlerStack->push(Middleware::retry(function ($retries, Psr7Request $request, Psr7Response $response = null, RequestException $exception = null) {
                if ($retries >= $this->maxRetries) {
                    return false;
                }

                if ($exception instanceof ConnectException) {
                    return true;
                }

                if ($response && $response->getStatusCode() >= 500) {
                    return true;
                }

                return false;
            }), $this->retryDelay);
        });
    }

    public function testCredentials() {
        return "APP ID: ".$this->appId;
    }

    private function requiresAuth() {
        $this->headers['headers']['key'] = $this->appId;
    }



    private function usesJSON() {
        $this->headers['headers']['Content-Type'] = 'application/json';
    }

    public function addParams($params = [])
    {
        $this->additionalParams = $params;

        return $this;
    }

    public function setParam($key, $value)
    {
        $this->additionalParams[$key] = $value;

        return $this;
    }

    /**
     * @param startDate format d-m-Y
     * @param endDate format d-m-Y
     * @param currency_code format array example: ["USD","TRY"...]
     */

    public function getCurrency(array $currency_code,string $startDate, string $endDate, $type = 'A')
    {
        $getParemeters = '';
        foreach ($currency_code as $key => $value) {
            $getParemeters .= 'TP.DK.'.$value.'.'.$type;
            if (count($currency_code) -1 >  $key) {
                 $getParemeters .= '-';
            }
        }
        $this->headers['headers']['key'] = $this->appId;
        $this->headers['headers']['User-Agent'] = 'MyLaravelApp/1.0';


        try {
            $res =  $this->get('/series='.$getParemeters.'&startDate='.$startDate.'&endDate='.$endDate.'&type=json');

            $result = $res->getBody()->getContents();

            $items = json_decode($result)->items;

             $date = '';
             $currencyList = array();
            foreach ($items[0] as $key => $value) {
             if ($key == 'Tarih') {
                 $date = $value;
             }
             else
             {
             if ($key != 'UNIXTIME') {
                 array_push($currencyList,[str_replace('TPDK', '',str_replace('_','',str_replace('TP_DK_','',str_replace('_A','',$key)))),$value]);
             }

             }

            }

            foreach ($currencyList as $key => $value) {
             $id = currencyType::where('currency_code', strval($value[0]))->first();
             if (isset($id)) {
                 $currency = CurrencyTCMB::where('currency_code', $id->id)->first();
                 if (isset($currency)) {
                     $currency->currency_value = str_replace('.',',',isset($value[1]) ? $value[1] : 0);
                     $currency->save();
                 }
                 else
                 {
                     $currency = new CurrencyTCMB();
                     $currency->currency_code = $id->id;
                     $currency->currency_value =  str_replace('.',',',isset($value[1]) ? $value[1] : 0);
                     $currency->save();
                 }
             }

            }
        } catch (RequestException $e) {
            echo 'Request failed: ' . $e->getMessage();
            if ($e->hasResponse()) {
                echo 'Response: ' . $e->getResponse()->getBody();
            }
        }
    }


    public function post($endPoint) {
        if($this->requestAsync === true) {
            $promise = $this->client->postAsync(self::API_URL . $endPoint, $this->headers);
            return (is_callable($this->requestCallback) ? $promise->then($this->requestCallback) : $promise);
        }
        return $this->client->post(self::API_URL . $endPoint, $this->headers);
    }

    public function put($endPoint) {
        if($this->requestAsync === true) {
            $promise = $this->client->putAsync(self::API_URL . $endPoint, $this->headers);
            return (is_callable($this->requestCallback) ? $promise->then($this->requestCallback) : $promise);
        }
        return $this->client->put(self::API_URL . $endPoint, $this->headers);
    }

    public function get($endPoint) {

        return $this->client->get(self::API_URL . $endPoint, $this->headers,['timeout' => 3000,]);
    }

    public function delete($endPoint) {
        if($this->requestAsync === true) {
            $promise = $this->client->deleteAsync(self::API_URL . $endPoint, $this->headers);
            return (is_callable($this->requestCallback) ? $promise->then($this->requestCallback) : $promise);
        }
        return $this->client->delete(self::API_URL . $endPoint, $this->headers);
    }
}
