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

  public function getAllKomik(): array {
    $statement = self::$connDB->prepare("
      SELECT
          k.id_karya,
          k.judul_karya,
          k.penulis_karya,
          k.email_penulis_karya,
          k.tipe_karya,
          k.created_at,
          km.id_komik,
          km.deskripsi_komik,
          km.file_name_komik
      FROM karya AS k
      JOIN komik AS km ON km.id_karya = k.id_karya
    ");
    $statement->execute();
    return $statement->fetchAll();
  }
}