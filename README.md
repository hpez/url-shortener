# Url Shortener

A simple url shortener package for laravel

Install using:
```shell script
composer require hpez/url-shortener
```

Then add the Alias in `config/app.php`:
```php        
        'UrlShortener' => \Hpez\UrlShortener\Facades\UrlShortener::class,
```

And the service provider if not added automatically:
```php
        Hpez\UrlShortener\UrlShortenerServiceProvider::class
```

And then run the migrations:
```shell script
php artisan migrate        
```

Usage:
```php
    $shortenedUrl = UrlShortener::shorten('example.com/test');
```
