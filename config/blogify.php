<?php 

return [


	/*
    |--------------------------------------------------------------------------
    | Blogify Domain
    |--------------------------------------------------------------------------
    |
    | This is the subdomain where Blogify will be accessible from. If the
    | setting is null, Blogify will reside under the same domain as the
    | application. Otherwise, this value will be used as the subdomain.
    |
    */
    'domain' => env('BLOGIFY_DOMAIN', null),


    /*
    |--------------------------------------------------------------------------
    | Blogify Path
    |--------------------------------------------------------------------------
    |
    | This is the URI path where Blogify will be accessible from. Feel free
    | to change this path to anything you like. Note that the URI will not
    | affect the paths of its internal API that aren't exposed to users.
    |
    */
    'path' => env('BLOGIFY_PATH', 'blog'),


    /*
    |--------------------------------------------------------------------------
    | Blogify Name
    |--------------------------------------------------------------------------
    |
    | 
    | 
    | 
    |
    */
	'name' => env('BLOGIFY_NAME', 'Ar Blog'),


	/*
    |--------------------------------------------------------------------------
    | Blogify Description
    |--------------------------------------------------------------------------
    |
    | 
    | 
    | 
    |
    */
	'description' => 'Pretty simple Blog system for your existing websites',


	/*
    |--------------------------------------------------------------------------
    | Blogify Enabled
    |--------------------------------------------------------------------------
    |
    | 
    | 
    | 
    |
    */
	'enabled' => env('BLOGIFY_ENABLED', true),


	/*
    |--------------------------------------------------------------------------
    | Blogify Storage Driver
    |--------------------------------------------------------------------------
    |
    | This configuration options determines the storage driver that will
    | be used to store Telescope's data. In addition, you may set any
    | custom options as needed by the particular driver you choose.
    |
    */
    'driver' => env('BLOGIFY_DRIVER', 'database'),
    'storage' => [
        'database' => [
            'connection' => env('DB_CONNECTION', 'mysql')
        ],
    ],
]