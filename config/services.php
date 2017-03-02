<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    'google' => [
        'client_id' => '124981912708-bc33l53i21rf4i21ttai9cdimod92jug.apps.googleusercontent.com',
        'client_secret' => 'Th-J_wOHUtrTlA6Y6wrBNe5t',
        'redirect' => 'http://localhost:8000/auth/google/callback'
        ],

     'linkedin' => [
        'client_id' => '81a1uzkrlgu8at',
        'client_secret' => 'pJOt3Zk0PBHHXGiv',
        'redirect' => 'http://localhost:8000/auth/linkedin/callback'
    ],

];
