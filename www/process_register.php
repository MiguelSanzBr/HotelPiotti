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

// Processar o registro
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Verificar se o email já está cadastrado
    if (User::where('email', $email)->exists()) {
        echo 'Email já cadastrado.';
    } else {
        // Criar novo usuário
        User::create([
            'name' => $name,
            'email' => $email,
            'password' => $password // Será automaticamente hasheada
        ]);
        echo 'Registro bem-sucedido! Você pode agora fazer login. <a href="login.php">Pagina de login</a>';
    }
}
?>
