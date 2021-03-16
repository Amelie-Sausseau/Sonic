<?php

namespace App;

class Router {
  public $router;
  public $match;

  public function __construct() {
      $this->router = new \AltoRouter();
      $this->router->setBasePath($_SERVER['BASE_URI']); // la doc dit de faire ça !
      // var_dump($this->router);
  }

  public function map($method, $path, $endpoint) {
      //var_dump($this->router);

      $this->router->map($method, $path, $endpoint);

      // var_dump($this->router->routes[0]);
      // ...
  }

  public function match() {
      $this->match = $this->router->match();
    //   var_dump($this->match);
  }

  public function letsGo() {
    // Si aucune correspondance n'a été trouvée, on s'arrête tout de
    // suite de traiter la requête et on retourne une page 404.
    if ($this->match == null) {
      die('Page not found');
    }

    // var_dump($this->match['target']);
    $parts = explode('#', $this->match['target']);

    // var_dump($parts);
    $controllerName = $parts[0];
    $methodName = $parts[1]; // undefined offset: 1

    // Une fois qu'on a rassemblé/déduit tout ça, on
    // instancie le contrôleur désigné et on appelle la
    // méthode désignée.
    $controller = new $controllerName();
    // var_dump($this->match['params']);
    $controller->$methodName($this->match['params']);
  }

  public function url($relativePath) {
    return $_SERVER['BASE_URI'] . '/' . $relativePath;
  }
}