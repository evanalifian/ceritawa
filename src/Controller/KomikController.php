<?php

namespace App\Ceritawa\Controller;

use App\Ceritawa\Config\Database;
use App\Ceritawa\Config\View;
use App\Ceritawa\Exception\ValidationException;
use App\Ceritawa\Model\KaryaModel;
use App\Ceritawa\Model\KomikModel;
use App\Ceritawa\Repository\KaryaRepository;
use App\Ceritawa\Repository\KomikRepository;
use App\Ceritawa\Service\KaryaService;
use App\Ceritawa\Service\KomikService;

class KomikController
{
  private static KomikModel $komikModel;
  private static KaryaModel $karyaModel;
  private static KomikService $komikService;
  private static KaryaService $karyaService;

  public function __construct()
  {
    $connDB = Database::connect();
    $komikRepository = new KomikRepository($connDB);
    $karyaRepository = new KaryaRepository($connDB);

    self::$komikModel = new KomikModel();
    self::$karyaModel = new KaryaModel();
    self::$komikService = new KomikService($komikRepository);
    self::$karyaService = new KaryaService($karyaRepository);
  }

  public function index(): void
  {
    View::render("komik/index", [
      "title" => "Komik Saya — Ceritawa",
      "styles" => ["komik.css"]
    ]);
  }

  public function save(): void
  {
    try {
      self::$karyaModel->judul_karya = $_POST["judul_karya"];
      self::$karyaModel->penulis_karya = $_POST["penulis_karya"];
      self::$karyaModel->email_penulis_karya = $_POST["email_penulis_karya"];
      self::$komikModel->deskripsi_komik = $_POST["deskripsi_komik"];
      self::$komikModel->file_name_komik = $_FILES["file_komik"]["name"];
      
      self::$karyaService->save(self::$karyaModel, "komik");
      self::$komikService->save(self::$komikModel);
      View::redirect("/profile/komik");
    } catch (ValidationException $e) {
      View::render("komik/index", [
        "title" => "Komik Saya — Ceritawa",
        "styles" => ["komik.css"],
        "error_message" => $e->getMessage(),
        "scripts" => ["error_post_modal_komik.js"]
      ]);

    }
  }
}