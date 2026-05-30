<?php

namespace App\Ceritawa\Service;

use App\Ceritawa\Exception\ValidationException;
use App\Ceritawa\Model\KomikModel;
use App\Ceritawa\Repository\KomikRepository;

class KomikService
{
  private static $komikRepository;

  public function __construct(KomikRepository $komikRepository)
  {
    self::$komikRepository = $komikRepository;
  }

  public function save(KomikModel $model): void
  {
    self::komikValidate($model);

    $file_name = $_FILES["file_komik"]["name"];
    $file_tmp = $_FILES["file_komik"]["tmp_name"];

    move_uploaded_file($file_tmp, __DIR__ . "/../../public/uploads/komik/" . $file_name);
    self::$komikRepository->save($model);
  }

  private static function komikValidate(KomikModel $model)
  {
    if (empty($model->deskripsi_komik)) {
      throw new ValidationException("Deskripsi komik tidak boleh kosong");
    }

    if (empty($model->file_name_komik)) {
      throw new ValidationException("File tidak boleh kosong");
    }

    if ($_FILES["file_komik"]["type"] !== "application/pdf") {
      throw new ValidationException("File harus berupa PDF");
    }
  }

  public function getAllKomik(): array {
    return self::$komikRepository->getAllKomik();
  }
}