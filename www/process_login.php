<?php

require 'vendor/autoload.php';
require 'bootstrap.php'; 
require 'class/user.php';
require 'DatabaseConnection.php';

// Passar o hasher para o modelo User
function generateRememberToken() {
    return bin2hex(random_bytes(30));  
}

User::setHasher($hasher);

// Processar o login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Verificar se o usuário existe
    $user = User::where('email', $email)->first();
    
    if ($user && $hasher->check($password, $user->password)) {
        if (isset($_POST['lembrar-de-mim'])) {
            $rememberToken = bin2hex(random_bytes(30));
            setcookie('remember_token', $rememberToken, time() + (86400 * 30), "/"); // Expira em 30 dias
            $user->remember_token = $rememberToken;
            $user->save();
        }
        echo 'Login bem-sucedido! Bem-vindo, ' . $user->name;
    } else {
        echo 'Email ou senha incorretos.';
    }
}
?>
