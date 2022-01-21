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
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'google' => [
        'client_id' => '72852634945-gvv0rg6p4p2sqft30rrdekgijmbh0ehv.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://127.0.0.1:8000/auth/google/callback',
    ],

    'facebook' => [
        'client_id' => '1097942747726754',
        'client_secret' => 'ca3d1c59fad82444b6414bc48fe80f78',
        'redirect' => 'http://127.0.0.1:8000/auth/facebook/callback',
    ],

    'twitter' => [
        'client_id' => '72852634945-gvv0rg6p4p2sqft30rrdekgijmbh0ehv.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://127.0.0.1:8000/auth/google/callback',
    ],

];
