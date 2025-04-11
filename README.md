<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Laravel Docker Starter Kit
- Laravel v12.x
- PHP v8.4.x
- MySQL v8.1.x (default)
- MariaDB v10.11.x
- PostgreSQL v16.x
- pgAdmin v4.x
- phpMyAdmin v5.x
- Mailpit v1.x
- Node.js v18.x
- NPM v10.x
- Yarn v1.x
- Vite v5.x
- Rector v1.x
- Redis v7.2.x

# Requirements
- Stable version of [Docker](https://docs.docker.com/engine/install/)
- Compatible version of [Docker Compose](https://docs.docker.com/compose/install/#install-compose)

# How To Deploy

### For first time only !
- `git clone https://github.com/refactorian/laravel-docker.git`
- `cd laravel-docker`
- `docker compose up -d --build`
- `docker compose exec php bash`
- `composer setup`

### From the second time onwards
- `docker compose up -d`

# Notes

### Laravel Versions
- [Laravel 12.x](https://github.com/refactorian/laravel-docker/tree/main)
- [Laravel 11.x](https://github.com/refactorian/laravel-docker/tree/laravel_11x)
- [Laravel 10.x](https://github.com/refactorian/laravel-docker/tree/laravel_10x)

### Laravel App
- URL: http://localhost

### Mailpit
- URL: http://localhost:8025

### phpMyAdmin
- URL: http://localhost:8080
- Server: `db`
- Username: `refactorian`
- Password: `refactorian`
- Database: `refactorian`

### Adminer
- URL: http://localhost:9090
- Server: `db`
- Username: `refactorian`
- Password: `refactorian`
- Database: `refactorian`

### Basic docker compose commands
- Build or rebuild services
    - `docker compose build`
- Create and start containers
    - `docker compose up -d`
- Stop and remove containers, networks
    - `docker compose down`
- Stop all services
    - `docker compose stop`
- Restart service containers
    - `docker compose restart`
- Run a command inside a container
    - `docker compose exec [container] [command]`

### Useful Laravel Commands
- Display basic information about your application
    - `php artisan about`
- Remove the configuration cache file
    - `php artisan config:clear`
- Flush the application cache
    - `php artisan cache:clear`
- Clear all cached events and listeners
    - `php artisan event:clear`
- Delete all of the jobs from the specified queue
    - `php artisan queue:clear`
- Remove the route cache file
    - `php artisan route:clear`
- Clear all compiled view files
    - `php artisan view:clear`
- Remove the compiled class file
    - `php artisan clear-compiled`
- Remove the cached bootstrap files
    - `php artisan optimize:clear`
- Delete the cached mutex files created by scheduler
    - `php artisan schedule:clear-cache`
- Flush expired password reset tokens
    - `php artisan auth:clear-resets`

### Laravel Pint (Code Style Fixer | PHP-CS-Fixer)
- Format all files
    - `vendor/bin/pint`
- Format specific files or directories
    - `vendor/bin/pint app/Models`
    - `vendor/bin/pint app/Models/User.php`
- Format all files with preview
    - `vendor/bin/pint -v`
- Format uncommitted changes according to Git
    - `vendor/bin/pint --dirty`
- Inspect all files
  - `vendor/bin/pint --test`

### Rector
- Dry Run
    - `vendor/bin/rector process --dry-run`
- Process
    - `vendor/bin/rector process`

# Alternatives
- [Laravel Sail](https://laravel.com/docs/master/sail)
- [Laravel Herd](https://herd.laravel.com/)
- [Laradock](https://laradock.io/)

# Laravel Project

## Требования
- PHP >= 8.4
- Composer
- MySQL >= 8.1
- Node.js >= 18
- NPM >= 10

## Установка

1. Клонировать репозиторий:
```bash
git clone [your-repository-url]
cd [project-directory]
```

2. Установить зависимости PHP:
```bash
composer install
```

3. Установить зависимости Node.js:
```bash
npm install
```

4. Скопировать файл окружения:
```bash
cp .env.example .env
```

5. Сгенерировать ключ приложения:
```bash
php artisan key:generate
```

6. Настроить подключение к базе данных в файле `.env`

7. Выполнить миграции:
```bash
php artisan migrate
```

8. Скомпилировать фронтенд:
```bash
npm run build
```

## Docker

Для разработки с использованием Docker:

1. Скопировать docker-compose.override.yml.example:
```bash
cp docker-compose.override.yml.example docker-compose.override.yml
```

2. Запустить контейнеры:
```bash
docker compose up -d
```

3. Войти в контейнер PHP:
```bash
docker compose exec php bash
```

4. Установить зависимости и выполнить миграции:
```bash
composer install
php artisan migrate
```

## Тестирование

```bash
php artisan test
```

## Дополнительная информация

- Документация Laravel: [https://laravel.com/docs](https://laravel.com/docs)
- Документация Vite: [https://vitejs.dev/](https://vitejs.dev/)