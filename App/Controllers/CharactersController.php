<?php

namespace App\Controllers;

use App\Models\Characters;
use App\Models\Type;


class CharactersController
{
  // => déclenche l'affichage d'un template spécifique
  public function characters($params)
  {

    // récupérer tous les personnages qui correspondent à cette catégorie
    $characters = Characters::find($params['id']);

    // ces lignes de code servent à afficher le bon template
    $this->show('characters', ['characters' => $characters, 'type' => $type]);
  }

  public function type($params)
  {
    $type = Type::find($params['id']);
    $characters = $type->characters();
    $this->show('type', ['type' => $type, 'characters' => $characters,]);
  }
}
