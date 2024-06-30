# Environment setup
PHP version: 8.3.8

Node.js version: 20.15.0

MySQL version: 8.0.30

# Database/schema dump
I have run the `php artisan schema:dump` command. The generated file can be found under `database` > `schema`.

# Testing the app
## composer install
After running `composer install`, please copy all contents from `.env.example` to a new `.env` file and run `php artisan key:generate`.

## npm install
After running `npm install`, please run either `npm run dev` or `npm run build` to generate the Vue.js web pages.

## Test data for testing scenarios
After running `php artisan migrate`, you may run `php artisan db:seed` to fill the database with two sample users whose passwords are both `password`:
1. Username: `wayne_f`; e-mail address: `wayne@example.com`
2. Username: `adrian_f`; e-mail address: `adrian@example.com`

## Testing using Pest
In addition to manually testing, you may run `vendor\bin\pest` to run the Pest tests.