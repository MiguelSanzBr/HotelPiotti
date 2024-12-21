<?php

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Container\Container;
use Illuminate\Events\Dispatcher;

require 'vendor/autoload.php';

// Inicializar o Container do Laravel
$app = new Container();
$app->instance('app', $app);
$app->instance('config', new Illuminate\Config\Repository());
$app['config']['app.key'] = 'base64:'.base64_encode(random_bytes(32));

// Inicializar o Dispatcher de Eventos
$events = new Dispatcher($app);
$app->instance('events', $events);

// Configurar Eloquent
$capsule = new Capsule;
$capsule->addConnection([
    'driver'    => 'pgsql',
    'host'      => '127.0.0.1',
    'database'  => 'hotel_piotti_db',
    'username'  => 'root',
    'password'  => 'admin123',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);
$capsule->setAsGlobal();
$capsule->bootEloquent();

// Registrar Hasher diretamente no container
$app->singleton('hash', function() {
    return new Illuminate\Hashing\BcryptHasher;
});

$hasher = $app->make('hash');
