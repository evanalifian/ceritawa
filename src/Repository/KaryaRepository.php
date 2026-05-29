<?php

namespace App\Ceritawa\Repository;

use App\Ceritawa\Model\KaryaModel;

class KaryaRepository
{
  private static \PDO $connDB;

  public function __construct(\PDO $connDB)
  {
    self::$connDB = $connDB;
  }

  public function save(KaryaModel $model, string $type): void
  {
    $statement = self::$connDB->prepare("INSERT INTO karya (id_user, judul_karya, penulis_karya, email_penulis_karya, tipe_karya) VALUES (?, ?, ?, ?, ?)");
    $statement->execute([$_SESSION["auth"]["id_user"], $model->judul_karya, $model->penulis_karya, $model->email_penulis_karya, $type]);
  }

  public function getAllKarya(): array
  {
    $statement = self::$connDB->prepare("SELECT * FROM karya");
    $statement->execute();
    return $statement->fetchAll();
  }

  public function getKaryaByUser(int $idUser): array
  {
    $statement = self::$connDB->prepare("SELECT * FROM karya WHERE id_user = ?");
    $statement->execute([$idUser]);
    return $statement->fetchAll();
  }
}