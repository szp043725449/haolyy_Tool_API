# Laravel Doctrine ORM

## Documentation

## Installation

Require this package  

```php
composer require "laravel-doctrine/orm:1.1.*"
```

After adding the package, add the ServiceProvider to the providers array in `config/app.php`

```php
Haolyy\Api\HaolyyServiceProvider::class,,
```

Optionally you can register the EntityManager facade:

```php
'haolyyServer'      => Haolyy\Api\Facades\HaolyyService::class,
```

To publish the config use:

```php
php artisan vendor:publish --tag="config"
```

sign Middleware:

```php
/**
 * @Middleware("hsign")
 */
```

