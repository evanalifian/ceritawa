<?php

namespace App\Ceritawa\Service;

use App\Ceritawa\Exception\ValidationException;
use App\Ceritawa\Model\KaryaModel;
use App\Ceritawa\Repository\KaryaRepository;

class KaryaService
{
  private static KaryaRepository $karyaRepository;

  public function __construct(KaryaRepository $karyaRepository)
  {
    self::$karyaRepository = $karyaRepository;
  }

  public function save(KaryaModel $model, string $tipe): void
  {
    self::saveValidate($model);
    self::$karyaRepository->save($model, $tipe);
  }

  private function saveValidate(KaryaModel $model): void
  {
    if (empty($model->judul_karya) || empty($model->penulis_karya) || empty($model->email_penulis_karya)) {
      throw new ValidationException("Form tidak boleh kosong");
    }
  }

  public function getAllKarya(): array
  {
    return self::$karyaRepository->getAllKarya();
  }

  public function getAnekdotByUser(int $idUser): array
  {
    return self::$karyaRepository->getKaryaByUser($idUser);
  }
}