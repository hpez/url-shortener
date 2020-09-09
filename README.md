# url-shortener

A simple url shortener package for laravel

Install using:
```
composer require hpez/url-shortener
```

Then add the Alias in `config/app.php`:
```        
        'UrlShortener' => \Hpez\UrlShortener\Facades\UrlShortener::class,
```

And the service provider if not added automatically:
```
        Hpez\UrlShortener\UrlShortenerServiceProvider::class
```

And then run the migrations:
```
php artisan migrate        
```

Usage:
```php
    $shortenedUrl = UrlShortener::shorten('example.com/test');
```
