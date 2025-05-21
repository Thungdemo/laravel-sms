<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Default driver
    |--------------------------------------------------------------------------
    |
    | The default driver to use
    |
    */
    'default' => 'textlocal',

    /*
    |--------------------------------------------------------------------------
    | Driver configurations
    |--------------------------------------------------------------------------
    |
    | The driver specific configurations such as api key, username, password
    |
    */
    'drivers' => [
        'textlocal' => [
            'apikey' => env('TEXTLOCAL_APIKEY'),
            'sender' => env('TEXTLOCAL_SENDER'),
            'test' => false,
        ]
    ]
];