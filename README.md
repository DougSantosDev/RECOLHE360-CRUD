# ♻️ RECOLHE360-CRUD

Sistema de agendamento e gerenciamento de materiais recicláveis, desenvolvido com **Laravel 12** e **MySQL**.  
Este guia mostra como rodar o projeto no **Visual Studio Code** e visualizar as tabelas e funcionalidades.

---

## 🖥️ Requisitos

- [PHP](https://www.php.net/downloads) >= 8.3
- [Composer](https://getcomposer.org/download/)
- [MySQL](https://dev.mysql.com/downloads/) ou MariaDB
- [Visual Studio Code](https://code.visualstudio.com/)
- Extensões recomendadas no VS Code:
  - PHP Intelephense
  - Laravel Blade Snippets
  - Laravel Artisan

---

## ⚙️ Configuração do Ambiente

Antes de rodar o projeto, configure o ambiente com os comandos abaixo:

```bash
# 1. Instalar dependências do Laravel
composer install

# 2. Criar arquivo de configuração do ambiente
cp .env.example .env   # Linux/Mac
copy .env.example .env # Windows PowerShell

# 3. Gerar chave da aplicação
php artisan key:generate

# 4. Rodar migrations e seeders (cria e popula as tabelas)
php artisan migrate --seed
