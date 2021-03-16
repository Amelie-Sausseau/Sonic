<?php

namespace App\Models;

use App\Database;
use PDO;

class Games
{
    private $id;
    private $name;
    private $console;
    private $release;
    private $picture;

    static public function findAll()
    {
        $sql = "
        SELECT *
        FROM `games`
        ORDER BY `release`
        ;
      ";

        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);

        return $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'App\Models\Games');
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
     * Get the value of console
     */
    public function getConsole()
    {
        return $this->console;
    }

    /**
     * Set the value of console
     *
     * @return  self
     */
    public function setConsole($console)
    {
        $this->console = $console;

        return $this;
    }

    /**
     * Get the value of release
     */
    public function getRelease()
    {
        return $this->release;
    }

    /**
     * Set the value of release
     *
     * @return  self
     */
    public function setRelease($release)
    {
        $this->release = $release;

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
}
