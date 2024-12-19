<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
        Hotel Piotti - Criar Conta
    </title>
    <meta name="description" content="Simple landind page for hotel" />
    <meta name="keywords" content="" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body
    class="leading-normal tracking-normal overflow-x-hidden flex items-center justify-center w-screen h-screen bg-cover bg-center bg-fixed bg-[url('img/home.jpg')]"
    style="font-family: 'Poppins', sans-serif;">

    <div class="bg-white p-8 rounded-lg shadow-md w-96 bg-opacity-30 backdrop-blur-md">
        <h2 class="text-3xl font-bold mb-6 text-center">Cadastro</h2>
        <form action="#">
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-900">Nome</label>
                <input type="text" id="name"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    placeholder="Joãozinho" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-900">Email</label>
                <input type="email" id="email"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    placeholder="you@example.com" required>
            </div>
            <div class="mb-6">
                <label for="password" class="block text-sm font-medium text-gray-900">Senha</label>
                <input type="password" id="password"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    placeholder="********" required>
            </div>
            <div class="text-center">
                <a href="#" class="font-bold text-indigo-600 transition duration-300 hover:text-indigo-800">Fazer login</a>
                <p class="my-5">ou</p>
            </div>
            <div class="mt-6">
                <button type="submit"
                    class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Criar conta
                </button>
            </div>
        </form>

    </div>
</body>

</html>