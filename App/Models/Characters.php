<?php

namespace App\Models;

use App\Database;
use PDO;

class Characters
{
  private $id;
  private $name;
  private $description;
  private $picture;
  private $created_at;
  private $updated_at;
  private $type_id;

  static public function findAll()
  {
    $sql = "
      SELECT *
      FROM `character`
      ORDER BY name
      ;
    ";

    $pdo = Database::getPDO();
    $pdoStatement = $pdo->query($sql);

    return $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'App\Models\Characters');
  }


  /**
   * Cette méthode permet de récupérer le nom du type du personnage actuel
   *
   * @return void
   */
  public function getTypeName()
  {
    // on récupère un objet Type
    $type = Type::find($this->type_id);

    // on renvoit le nom du type
    return $type->getName();
  }


  /**
   * Get the value of id
   */
  public function getId()
  {
    return $this->id;
  }

  /**
   * Set the value of id
   *
   * @return  self
   */
  public function setId($id)
  {
    $this->id = $id;

    return $this;
  }

  /**
   * Get the value of name
   */
  public function getName()
  {
    return $this->name;
  }

  /**
   * Set the value of name
   *
   * @return  self
   */
  public function setName($name)
  {
    $this->name = $name;

    return $this;
  }

  /**
   * Get the value of description
   */
  public function getDescription()
  {
    return $this->description;
  }

  /**
   * Set the value of description
   *
   * @return  self
   */
  public function setDescription($description)
  {
    $this->description = $description;

    return $this;
  }

  /**
   * Get the value of picture
   */
  public function getPicture()
  {
    return $this->picture;
  }

  /**
   * Set the value of picture
   *
   * @return  self
   */
  public function setPicture($picture)
  {
    $this->picture = $picture;

    return $this;
  }

  /**
   * Get the value of created_at
   */
  public function getCreated_at()
  {
    return $this->created_at;
  }

  /**
   * Set the value of created_at
   *
   * @return  self
   */
  public function setCreated_at($created_at)
  {
    $this->created_at = $created_at;

    return $this;
  }

  /**
   * Get the value of updated_at
   */
  public function getUpdated_at()
  {
    return $this->updated_at;
  }

  /**
   * Set the value of updated_at
   *
   * @return  self
   */
  public function setUpdated_at($updated_at)
  {
    $this->updated_at = $updated_at;

    return $this;
  }

  /**
   * Get the value of type_id
   */
  public function getType_id()
  {
    return $this->type_id;
  }

  /**
   * Set the value of type_id
   *
   * @return  self
   */
  public function setType_id($type_id)
  {
    $this->type_id = $type_id;

    return $this;
  }
}
