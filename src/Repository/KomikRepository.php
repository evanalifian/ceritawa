<?php

namespace App\Ceritawa\Repository;

use App\Ceritawa\Model\KomikModel;

class KomikRepository
{
  private static \PDO $connDB;

  public function __construct(\PDO $connDB)
  {
    self::$connDB = $connDB;
  }

  public function save(KomikModel $model): \PDOStatement
  {
    $statement = self::$connDB->prepare("INSERT INTO komik (deskripsi_komik, file_name_komik) VALUES (?, ?)");
    $statement->execute([$model->deskripsi_komik, $model->file_name_komik]);
    return $statement;
  }
}