<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Router;

//Création des chemins vers les différentes pages du site
$router = new App\Router();

$router->map('GET', '/', 'App\Controllers\MainController#homepage');
$router->map('GET', '/content/creators/', 'App\Controllers\MainController#creators');
$router->map('GET', '/', 'App\Controllers\CatalogController#characters');
$router->map('GET', '/', 'App\Controllers\CatalogController#type');
$router->map('GET', '/content/games/', 'App\Controllers\MainController#games');


$router->match();
$router->letsGo();
