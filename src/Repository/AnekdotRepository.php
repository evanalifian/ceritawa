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

  public function getAnekdotByJudul(string $judulKarya): array
  {
    $statement = self::$connDB->prepare("
      SELECT
          k.id_karya,
          k.judul_karya,
          k.penulis_karya,
          k.email_penulis_karya,
          k.tipe_karya,
          k.created_at,
          a.id_anekdot,
          a.konten_anekdot
      FROM karya AS k
      JOIN anekdot AS a ON a.id_karya = k.id_karya
      WHERE k.judul_karya = ?
    ");
    $statement->execute([$judulKarya]);
    return $statement->fetch();
  }
}