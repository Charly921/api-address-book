<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# APIAddressBook

Laravel version v11.25.0
PHP version 8.2.12
Composer version 2.7.7

## Clone repository

Run `git clone https://github.com/Charly921/api-address-book.git api-address-book` on terminal.

## Installation of dependencies

Run `cd api-address-book` to access the project directory.

Run `composer install` to install the dependencies.

Run `npm install`

## .env local configuration
Run `cp .env.example .env` to duplicate the .env file, and add the following configuration.

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=api-address-book
DB_USERNAME=root
DB_PASSWORD=

## Database configuration
Create de database called "api-address-book".
Run `php artisan migrate` to run the migrations and seeders.

## Development server

Run `php artisan serve` for a dev server. Navigate to `http://localhost:8000/api/v1/contacts`.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
