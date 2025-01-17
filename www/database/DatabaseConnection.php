<?php

use Illuminate\Database\Capsule\Manager as Capsule;

require '../vendor/autoload.php';

$capsule = new Capsule;
$capsule->addConnection([
    'driver'    => 'pgsql',
    'host'      => 'hotel_piotti_db',
    'database'  => 'hotel_piotti_db',
    'username'  => 'root',
    'password'  => 'admin123',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);
$capsule->setAsGlobal();
$capsule->bootEloquent();