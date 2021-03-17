<?php

namespace App\Controllers;

use App\Models\Characters;
use App\Models\Games;


class MainController
{
  public function homepage($params)
  {
    $characters = Characters::findAll($params);

    $this->show('home', ['characters' => $characters]);
  }

  public function creators()
  {

    $this->show('creators');
  }

  public function games($params)
  {
    $games = Games::findAll($params);
    $this->show('games', ['games' => $games]);
  }


  protected function show($templateName, $viewVars = [])
  {
    // cette méthode étant appelée pour toutes les pages du site, 
    // on peut récupérer les spécifiques au footer et header qui sont également sur toutes les pages du site

    $viewVars['currentPage'] = $templateName;

    require_once __DIR__ . '/../views/_header.tpl.php';
    require_once __DIR__ . '/../views/' . $templateName . '.tpl.php';
    require_once __DIR__ . '/../views/_footer.tpl.php';
  }
}
