<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
        Hotel Piotti - Login
    </title>
    <meta name="description" content="Simple landind page for hotel" />
    <meta name="keywords" content="" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body
    class="leading-normal tracking-normal overflow-x-hidden flex items-center justify-center w-screen h-screen bg-cover bg-center bg-fixed bg-[url('../assets/img/home.jpg')]"
    style="font-family: 'Poppins', sans-serif;">

<?php
require '../auth.php';
$user = auth();

if ($user) {
    echo 'Login bem-sucedido! Bem-vindo, ' . $user->name;
    die();
} 
?>
    
    <div class="bg-white p-8 rounded-lg shadow-md w-96 bg-opacity-30 backdrop-blur-md">
        <h2 class="text-3xl font-bold mb-6 text-center">Login</h2>

        <!-- Formulário de acesso a conta -->
        <form action="process_login.php" method="POST">
            <div class="mb-4">
                <!-- Input de email do usuario, name = email -->
                <label for="email" class="block text-sm font-medium text-gray-900">Email</label>
                <input type="email" id="email" name="email"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    placeholder="you@example.com" required>
            </div>
            <div class="mb-6">
                <!-- Input de senha do usuario, name = password -->
                <label for="password" class="block text-sm font-medium text-gray-900">Senha</label>
                <input type="password" id="password" name="password"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    placeholder="********" required>
            </div>
            <div class="text-center"> 
                <!-- Link para página de cadastro de conta nova -->
                <div class="flex items-center my-5">
                    <input id="lembrar-de-mim" name="lembrar-de-mim" type="checkbox" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="lembrar-de-mim" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Lembrar De mim</label>
                </div>
                <a href="register.php" class="font-bold text-indigo-600 transition duration-300 hover:text-indigo-800">Criar conta</a> 
                <p class="my-5">ou</p>
            </div>
            <div class="mt-6">
                <!-- Botao para envio do Formulário -->
                <button type="submit"
                    class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Entrar na conta
                </button>
            </div>
        </form>

    </div>
</body>

</html>