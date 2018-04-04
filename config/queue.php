<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Queue Driver
    |--------------------------------------------------------------------------
    |
    | Laravel's queue API supports an assortment of back-ends via a single
    | API, giving you convenient access to each back-end using the same
    | syntax for each one. Here you may set the default queue driver.
    |
    | Supported: "sync", "database", "beanstalkd", "sqs", "redis", "null"
    |
    */
    // symc defoult is symcü

    'default' => env('QUEUE_DRIVER', 'sync'),

    /*
    |--------------------------------------------------------------------------
    | Queue Connections
    |--------------------------------------------------------------------------
    |
    | Here you may configure the connection information for each server that
    | is used by your application. A default configuration has been added
    | for each back-end shipped with Laravel. You are free to add more.
    |
    */

    'connections' => [
        'rabbitmq' => [
            'host' => env('RABBITMQ_SETTING_HOST', 'localhost'),
            'port' => env('RABBITMQ_SETTING_PORT', 5672),
            'vhost' => env('RABBITMQ_SETTING_VHOST', '/'),
            'login' => env('RABBITMQ_SETTING_LOGIN', 'guest'),
            'password' => env('RABBITMQ_SETTING_PASSWORD', 'guest'),
            'queue' => env('RABBITMQ_SETTING_QUEUE', 'default'), // name of the default queue,
            'exchange_declare' => env('RABBITMQ_SETTING_EXCHANGE_DECLARE', true), // create the exchange if not exists
            // create the queue if not exists and bind to the exchange
            'queue_declare_bind' => env('RABBITMQ_SETTING_QUEUE_DECLARE_BIND', true),            'factory_class' => Enqueue\AmqpBunny\AmqpConnectionFactory::class,
        ],
        'queue_params' => [
            'passive' => env('RABBITMQ_SETTING_QUEUE_PASSIVE', false),
            'durable' => env('RABBITMQ_SETTING_QUEUE_DURABLE', true),
            'exclusive' => env('RABBITMQ_SETTING_QUEUE_EXCLUSIVE', false),
            'auto_delete' => env('RABBITMQ_SETTING_QUEUE_AUTODELETE', false),
        ],
        'exchange_params' => [
            'name' => env('RABBITMQ_SETTING_EXCHANGE_NAME', null),
            // http://www.rabbitmq.com/tutorials/amqp-concepts.html
            'type' => env('RABBITMQ_SETTING_EXCHANGE_TYPE', 'direct'),
            'passive' => env('RABBITMQ_SETTING_EXCHANGE_PASSIVE', false),
            // the exchange will survive server restarts
            'durable' => env('RABBITMQ_SETTING_EXCHANGE_DURABLE', true),
            'auto_delete' => env('RABBITMQ_SETTING_EXCHANGE_AUTODELETE', false),
        ],
        'sync' => [
            'driver' => 'sync',
        ],

        'database' => [
            'driver' => 'database',
            'table' => 'jobs',
            'queue' => 'default',
            'retry_after' => 90,
        ],

        'beanstalkd' => [
            'driver' => 'beanstalkd',
            'host' => 'localhost',
            'queue' => 'default',
            'retry_after' => 90,
        ],

        'sqs' => [
            'driver' => 'sqs',
            'key' => 'your-public-key',
            'secret' => 'your-secret-key',
            'prefix' => 'https://sqs.us-east-1.amazonaws.com/your-account-id',
            'queue' => 'your-queue-name',
            'region' => 'us-east-1',
        ],

        'redis' => [
            'driver' => 'redis',
            'connection' => 'default',
            'queue' => 'default',
            'retry_after' => 90,
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Failed Queue Jobs
    |--------------------------------------------------------------------------
    |
    | These options configure the behavior of failed queue job logging so you
    | can control which database and table are used to store the jobs that
    | have failed. You may change them to any database / table you wish.
    |
    */

    'failed' => [
        'database' => env('DB_CONNECTION', 'mysql'),
        'table' => 'failed_jobs',
    ],

];
