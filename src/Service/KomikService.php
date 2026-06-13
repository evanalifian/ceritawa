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

    $fileName = $_FILES["file_komik"]["name"];
    $fileTmp = $_FILES["file_komik"]["tmp_name"];

    // Ambil extension file
    $extension = pathinfo($fileName, PATHINFO_EXTENSION);

    // Ambil nama file tanpa extension
    $nameOnly = pathinfo($fileName, PATHINFO_FILENAME);

    // Hilangkan karakter aneh dan ganti spasi menjadi _
    $nameOnly = preg_replace('/[^A-Za-z0-9_-]/', '_', $nameOnly);

    // Buat nama file unik
    $newFileName = time() . '_' . $nameOnly . '.' . $extension;

    $uploadPath = __DIR__ . "/../../public/uploads/komik/" . $newFileName;

    if (!move_uploaded_file($fileTmp, $uploadPath)) {
      throw new \Exception("Gagal mengupload file.");
    }

    $model->file_name_komik = $newFileName;

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

  public function getAllKomikByIdUser(): array
  {
    return self::$komikRepository->getAllKomikByIdUser();
  }

  public function deleteKomikByIdKarya(int $id_karya): void
  {
    try {
      $komik = self::$komikRepository->getKomikByIdKarya($id_karya);
      if (!$komik) {
        throw new ValidationException("Karya tidak ditemukan");
      } else {
        $file_path = __DIR__ . "/../../public/uploads/komik/" . $komik["file_name_komik"];
        if (file_exists($file_path)) {
          unlink($file_path);
        }
      }
      self::$komikRepository->deleteKomikByIdKarya($id_karya);
    } catch (ValidationException $e) {
      throw new ValidationException("Gagal menurunkan karya. Silakan coba lagi.");
    }
  }
}