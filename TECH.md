# Cod'Flix project


## Libraries
You will find here a small presentation of the libraries used on this project as well as a good reason why we use them


## Altorouter
### A lightning fast router for PHP
AltoRouter is a small but powerful routing class, heavily inspired by klein.php.

* Can be used with all HTTP Methods
* Dynamic routing with named route parameters
* Reversed routing
* Flexible regular expression routing (inspired by [Sinatra](http://www.sinatrarb.com/))
* Custom regexes

For a quick look and more information, visit their github(https://github.com/dannyvankooten/AltoRouter) to see for yourself

We have made the choice to use altorouter for its very quick configuration and instant efficacy.
It is a very useful tool to create routing for any PHP app. Fast and simple, it allows us to create dynamic routes for optimal and secured user experience.

Altorouter is a very well-know library used by many:

* 1.7 million dowloads on the Packagist(https://packagist.org/?query=altorout)
* 1.136 stars on the Package
* 1.1k stars on Github

Licence : MIT License

Copyright (c) 2012 Danny van Kooten hi@dannyvankooten.com

As an open source library, Cod'Flix is free to use and modfiy it as well as distribute a product using it.

#### Quick exemple to use Altorouter
```php
$router = new AltoRouter();

// map homepage
$router->map('GET', '/', function() {
    require __DIR__ . '/views/home.php';
});

// dynamic named route
$router->map('GET|POST', '/users/[i:id]/', function($id) {
  $user = .....
  require __DIR__ . '/views/user/details.php';
}, 'user-details');

// echo URL to user-details page for ID 5
echo $router->generate('user-details', ['id' => 5]); // Output: "/users/5"
```


