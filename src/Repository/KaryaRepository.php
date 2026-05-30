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
    $statement = self::$connDB->prepare("
      SELECT 
          k.judul_karya,
          k.penulis_karya,
          k.email_penulis_karya,
          k.tipe_karya,
          k.created_at,
          km.file_name_komik,
          km.deskripsi_komik
      FROM karya AS k
      LEFT JOIN komik AS km ON km.id_karya = k.id_karya
      LEFT JOIN anekdot AS a ON a.id_karya = k.id_karya
    ");
    $statement->execute();
    return $statement->fetchAll();
  }

  public function getKaryaByUserAndType(int $idUser, string $tipe_karya): array
  {
    $statement = self::$connDB->prepare("SELECT * FROM karya WHERE id_user = ? AND tipe_karya = ?");
    $statement->execute([$idUser, $tipe_karya]);
    return $statement->fetchAll();
  }
}