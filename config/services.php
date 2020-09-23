<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, SparkPost and others. This file provides a sane default
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

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'google' => [
        'client_id' => '118157067994-m8incgtoervhlnak96dlqfhlold0d40n.apps.googleusercontent.com',
        'client_secret' => 'ZaFxmHBwKh78TCHh8Qb80_x9',
        'redirect' => 'https://8a1c38c0e0a5.ngrok.io/auth/google/callback',
    ],

    'facebook' => [
        'client_id' => "266527214761388",
        'client_secret' => "c4c07cb84984a2f6f6ed094eff64125e",
        'redirect' => 'https://8a1c38c0e0a5.ngrok.io/auth/facebook/callback',
    ],


];
