<?php

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;


require_once __DIR__ . '/../DatabaseConnection.php';

Capsule::schema()->create('users', function (Blueprint $table) {
    $table->id(); // Coluna id
    $table->string('name'); // Coluna name
    $table->string('email')->unique(); // Coluna email
    $table->timestamp('email_verified_at')->nullable(); // Coluna email_verified_at
    $table->string('password'); // Coluna password
    $table->rememberToken(); // Coluna remember_token
    $table->timestamps(); // Colunas created_at e updated_at
});

echo "Tabela 'users' criada com sucesso!\n";
