<?php

use Illuminate\Database\Capsule\Manager as Capsule;

require 'vendor/autoload.php';
require 'bootstrap.php'; // Incluir o bootstrap configurado

// Configurar Eloquent no bootstrap.php
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

// Incluir a classe User
require 'class/user.php';

// Passar o hasher para o modelo User
User::setHasher($hasher);

// Processar o login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Verificar se o usuário existe
    $user = User::where('email', $email)->first();

    if ($user && $hasher->check($password, $user->password)) {
        echo 'Login bem-sucedido! Bem-vindo, ' . $user->name;
    } else {
        echo 'Email ou senha incorretos.';
    }
}
?>
