<?php

namespace App\Models;

use App\Database;
use PDO;

class Type
{
  private $id;
  private $name;
  private $created_at;
  private $updated_at;

  /**
   * Permet de retrouver en BDD le type
   * du personnage en fonction d'un ID.
   *
   * @param [type] $id
   * @return self
   */
  static public function find($id) {
    $sql = "
      SELECT *
      FROM type
      WHERE id = $id
      ;
    ";

    $pdo = Database::getPDO();
    $pdoStatement = $pdo->query($sql);

    return $pdoStatement->fetchObject('App\Models\Type');
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
  }