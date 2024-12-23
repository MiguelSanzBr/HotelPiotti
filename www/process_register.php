<?php

require 'bootstrap.php'; 
require 'DatabaseConnection.php';
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
            'password' => $password 
        ]);
        echo 'Registro bem-sucedido! Você pode agora fazer login. <a href="login.php">Pagina de login</a>';
    }
}
?>
