
# To-Do List Mangement (Backend)

This is the front end of To-Do List app build in Laravel Framework



## Installation

```bash
git clone https://github.com/Marlon-O/todo-list-backend.git
composer install
cp .env.example .env

```

Create your own database and change the DB_CONNECTION, DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, DB_PASSWORD on .env

```bash
php artisan migrate
php artisan db:seed
php artisan key:generate
```

Install Laravel Passport, then copy the password grant client ID and client Secret then change the value of PASSPORT_CLIENT_ID and PASSPORT_CLIENT_SECRET on .env
```bash
php artisan passport:install
```