<?php global $router; ?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="<?= $router->url('css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="<?= $router->url('css/styles.css'); ?>">
  <link rel="icon" type="image/png" href="<?= $router->url('images/sonic-the-hedgehog-1.png'); ?>">
  <title>Sonic</title>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-sticky navbar-airy navbar-light">
      <div class="container-fluid">
        <!-- Navbar Header  -->
        <img src="<?= $router->url('images/sonic-the-hedgehog-1.png'); ?>" alt="sonic" width="65px"> <a href="<?= $router->url(''); ?>" class="navbar-brand"> &#x2661; Sonic</a>
        <button type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
        <!-- Navbar Collapse -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a href="<?= $router->url(''); ?>" class="nav-link active">Home</a>
            </li>
            <li class="nav-item">
              <a href="<?= $router->url('content/creators/'); ?>" class="nav-link">Créateurs</a>
            </li>
            <li class="nav-item">
              <a href="<?= $router->url('content/games/'); ?>" class="nav-link">Jeux</a>
            </li>
          </ul>
          <div class="d-flex align-items-center justify-content-between justify-content-lg-end mt-1 mb-2 my-lg-0">
          </div>
        </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
    </nav>
  </header>