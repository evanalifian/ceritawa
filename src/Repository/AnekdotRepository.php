<?php

namespace App\Ceritawa\Repository;

use App\Ceritawa\Model\AnekdotModel;

class AnekdotRepository
{
  private static \PDO $connDB;

  public function __construct(\PDO $connDB)
  {
    self::$connDB = $connDB;
  }

  public function save(AnekdotModel $model): \PDOStatement
  {
    $statement = self::$connDB->prepare("INSERT INTO anekdot (konten_anekdot) VALUES (?)");
    $statement->execute([$model->konten_anekdot]);
    return $statement;
  }
}