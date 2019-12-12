<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Laravel CORS
    |--------------------------------------------------------------------------
    |
    | allowedOrigins, allowedHeaders and allowedMethods can be set to array('*')
    | to accept any value.
    |
    */
   
    'supportsCredentials' => false,
    'allowedOrigins' => ['*'],
    'allowedOriginsPatterns' => [],
    'allowedHeaders' => ['X-Requested-With', 'content-type', 'Accept', 'Authorization'],
    'allowedMethods' => ['OPTIONS', 'GET', 'POST', 'PUT',  'DELETE'],
    'exposedHeaders' => [],
    'maxAge' => 0,

];
