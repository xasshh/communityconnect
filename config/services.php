<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    
    'google_maps_api' => [
    'key' => env('GOOGLE_MAPS_API_KEY'),
],

'paypal' => [
    'client_id' => env('Abiz7FsAIFjwLlM745DPYEARptojo1TvlRNULQRXYrOj6i-zhFgWL37wO5jWFut-hhvbCJ2o9mymfiDe'),
    'secret' => env('EOt18aR0-I_0UGvL1U0BUt2WWeOogTA0HGxbZcDbEMTUH6QgwYrdJel-p43HKWQr_Kp0kbimhEAISewW'),
    'mode' => env('PAYPAL_MODE', 'live'),
],


];
