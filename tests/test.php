<?php

require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = new Dotenv\Dotenv(__DIR__."/../");
$dotenv->load();

$client = new Hatasever\TcmbCurr\TcmbCurrClient(
    getenv('APP_ID'),
    getenv('REST_API_KEY'),
    getenv('USER_AUTH_KEY'));

echo $client->testCredentials();

