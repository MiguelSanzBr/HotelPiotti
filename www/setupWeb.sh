#!/bin/bash

# Atualiza os pacotes e instala dependências
apt-get update
apt-get install -y curl unzip libpq-dev

# Instala o Composer
curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Instala as extensões PHP necessárias
docker-php-ext-install pdo pdo_pgsql

# Instala as dependências do Composer
composer install

# Executa a migração
php /database/migrations/create_users_table.php

# Inicia o PHP-FPM
php-fpm
