<?php

namespace App\Ceritawa\Controller;

use App\Ceritawa\Config\Database;
use App\Ceritawa\Config\View;
use App\Ceritawa\Exception\ValidationException;
use App\Ceritawa\Model\AnekdotModel;
use App\Ceritawa\Model\KaryaModel;
use App\Ceritawa\Repository\AnekdotRepository;
use App\Ceritawa\Repository\KaryaRepository;
use App\Ceritawa\Service\AnekdotService;
use App\Ceritawa\Service\KaryaService;

class AnekdotController
{
  private static AnekdotModel $anekdotModel;
  private static KaryaModel $karyaModel;
  private static AnekdotService $anekdotService;
  private static KaryaService $karyaService;

  public function __construct()
  {
    $connDB = Database::connect();
    $anekdotRepository = new AnekdotRepository($connDB);
    $karyaRepository = new KaryaRepository($connDB);

    self::$anekdotModel = new AnekdotModel();
    self::$karyaModel = new KaryaModel();
    self::$anekdotService = new AnekdotService($anekdotRepository);
    self::$karyaService = new KaryaService($karyaRepository);
  }

  public function save(): void
  {
    try {
      self::$karyaModel->penulis_karya = $_POST["penulis_anekdot"];
      self::$karyaModel->email_penulis_karya = $_POST["email_penulis_anekdot"];
      self::$karyaModel->judul_karya = $_POST["judul_anekdot"];
      self::$anekdotModel->konten_anekdot = $_POST["konten_anekdot"];

      self::$karyaService->save(self::$karyaModel, "anekdot");
      self::$anekdotService->save(self::$anekdotModel);
      View::redirect("/galeri");
    } catch (ValidationException $e) {
      View::render("latihan-menulis/index", [
        "title" => "Latihan Menulis Teks Anekdot — Ceritawa",
        "styles" => ["latihan-menulis.css"],
        "error_message" => $e->getMessage()
      ]);
    }
  }

  public function readAnekdot(string $judulKarya): void
  {
    $res = self::$anekdotService->getAnekdotByJudul(str_replace('%20', ' ', $judulKarya));
    View::render("read-anekdot/index", [
      "title" => $res["judul_karya"],
      "styles" => ['read-anekdot.css'],
      "anekdot" => $res
    ]);
  }
}