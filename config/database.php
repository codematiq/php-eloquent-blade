<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;
$capsule->addConnection([
    'driver' => 'pgsql',
    'url' => '',
    'host' => '127.0.0.1',
    'port' => '5432',
    'database' => 'grezti_lt',
    'username' => 'code',
    'password' => '',
    'charset' => 'utf8',
    'prefix' => '',
    'prefix_indexes' => true,
    'schema' => 'public',
    'sslmode' => 'prefer',
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();
