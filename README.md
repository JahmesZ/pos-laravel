# Laravel POS – IT0049 TFA5

A Laravel rebuild of the TFA1 POS app: landing page, about page, Customer Accounts, and User Accounts.
The account pages use static PHP arrays (defined in the controllers) as a temporary data source.

| URL          | Controller@method           | View                        |
|--------------|-----------------------------|-----------------------------|
| `/`          | `PageController@home`       | `resources/views/home.blade.php` |
| `/about`     | `PageController@about`      | `resources/views/about.blade.php` |
| `/customers` | `CustomerController@index`  | `resources/views/customers/index.blade.php` |
| `/users`     | `UserController@index`      | `resources/views/users/index.blade.php` |

## Requirements
PHP 8.2+, Composer, Git.

## Setup
```bash
git clone <your-repo-url> pos-laravel
cd pos-laravel
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed   # uses the default SQLite database
php artisan serve
```
Open http://127.0.0.1:8000 and use the navigation bar to visit all four pages.

## Useful Artisan commands
```bash
php artisan route:list
php artisan about
php artisan make:controller NameController
```

## Database
Laravel's default migrations (`database/migrations`) and `DatabaseSeeder` are included as-is; the pages in this activity do not query the database yet.
