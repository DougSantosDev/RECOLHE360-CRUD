#!/bin/bash
# Script para gerar CRUD Agendamento + Material em Laravel
# Execute com: bash make.sh

echo "==> Criando migrations..."
php artisan make:migration create_materials_table --create=materials
php artisan make:migration create_agendamentos_table --create=agendamentos

echo "==> Criando models..."
php artisan make:model Material -m
php artisan make:model Agendamento -m

echo "==> Criando controller..."
php artisan make:controller AgendamentoController --resource

echo "==> Criando seeder..."
php artisan make:seeder MaterialSeeder

echo "==> Criando views..."
mkdir -p resources/views/agendamentos/partials
touch resources/views/agendamentos/index.blade.php
touch resources/views/agendamentos/create.blade.php
touch resources/views/agendamentos/edit.blade.php
touch resources/views/agendamentos/show.blade.php
touch resources/views/agendamentos/partials/form.blade.php

echo "==> Lembre-se de colar os códigos fornecidos nas migrations, models, controller e views."
echo "==> Depois rode: php artisan migrate --seed"
