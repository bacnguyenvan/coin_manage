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
        'client_id' => '118157067994-0dd28ljg3o6tbu02e4mk8gdt38lt4dlg.apps.googleusercontent.com', 
        'client_secret' => 'KVlZfVLgL8pTez8TSSjbu9Yh',
        'redirect' => 'http://ec2-18-217-151-176.us-east-2.compute.amazonaws.com/auth/google/callback',
    ],

    'facebook' => [
        'client_id' => "266527214761388",
        'client_secret' => "c4c07cb84984a2f6f6ed094eff64125e",
        'redirect' => 'https://8a1c38c0e0a5.ngrok.io/auth/facebook/callback',
    ],


];
