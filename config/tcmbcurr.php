<?php

return array(
    /*
	|--------------------------------------------------------------------------
	| TCMB WEB Service App ID
	|--------------------------------------------------------------------------
	|
	|
	*/
    'app_id' => env('TCMB_APP_ID'),


    /*
	|--------------------------------------------------------------------------
	| Guzzle Timeout
	|--------------------------------------------------------------------------
	|
    |
	|
	*/
    'guzzle_client_timeout' => env('TCMBCURR_GUZZLE_CLIENT_TIMEOUT', 0),
);
