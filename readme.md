- composer require laravel/passport:7.5.1
- composer require lcobucci/jwt=3.3.3
- config/app
  providers => [ Laravel\Passport\PassportServiceProvider::class]

- php artisan migrate
- php artisan passport:install