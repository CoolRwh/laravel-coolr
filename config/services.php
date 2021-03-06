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
      'domain'   => env('MAILGUN_DOMAIN'),
      'secret'   => env('MAILGUN_SECRET'),
      'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
      'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
      'key'    => env('AWS_ACCESS_KEY_ID'),
      'secret' => env('AWS_SECRET_ACCESS_KEY'),
      'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'qq'  => [
      'client_id'     => env('QQ_KEY'),
      'client_secret' => env('QQ_SECRET'),
      'redirect'      => env('QQ_REDIRECT_URL'),
    ],
    'weixin' => [
      'client_id'     => env('WX_KEY'),
      'client_secret' => env('WX_SECRET'),
      'redirect'      => env('WX_REDIRECT_URI'),
      # 这一行配置非常重要，必须要写成这个地址。
      //'auth_base_uri' => 'https://open.weixin.qq.com/connect/qrconnect',
    ],
    'weibo'  => [
      'client_id'     => env('WEIBO_KEY'),
      'client_secret' => env('WEIBO_SECRET'),
      'redirect'      => env('WEIBO_REDIRECT_URL'),
    ],
    'github'  => [
      'client_id'     => env('GITHUB_KEY'),
      'client_secret' => env('GITHUB_SECRET'),
      'redirect'      => env('GITHUB_REDIRECT_URL'),
    ],


];
