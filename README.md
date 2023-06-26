## Project Setup Guide

1. copy .env.example file as .env file
2. add correct db information
3. run `composer install`
4. run `php artisan key:generate`
5. run `php artisan migrate`
6. run `php artisan db:seed UserSeeder`
7. run `php artisan serve`
