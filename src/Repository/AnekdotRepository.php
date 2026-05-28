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
    $statement = self::$connDB->prepare("INSERT INTO anekdot (
      id_user,
      penulis_anekdot,
      email_penulis_anekdot,
      judul_anekdot,
      konten_anekdot
    ) VALUES (?, ?, ?, ?, ?)");
    $statement->execute([
      $_SESSION['auth']['id_user'],
      $model->penulis_anekdot,
      $model->email_penulis_anekdot,
      $model->judul_anekdot,
      $model->konten_anekdot
    ]);
    return $statement;
  }
}