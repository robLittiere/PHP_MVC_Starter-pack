<?php
require './vendor/autoload.php';
require_once('config/config.php');
date_default_timezone_set('Europe/Paris');


$uri = $_SERVER['REQUEST_URI'];
$router = new AltoRouter();
$router->setBasePath(ROOT);

$router->map('GET', '/', function () {
  echo "<h1> Project Correctly inited </h1>";
}, "home");

// Get match object to see if a route has been matched
$match = $router->match();





// call closure or throw 404 status
if (is_array($match) && is_callable($match['target'])) {
  call_user_func_array($match['target'], $match['params']);
} else {
  // no route was matched
  header('Location: ' . ROOT);
}
