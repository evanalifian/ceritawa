<?php

namespace App\Ceritawa\Controller;

use App\Ceritawa\Config\Database;
use App\Ceritawa\Config\View;
use App\Ceritawa\Exception\ValidationException;
use App\Ceritawa\Model\AnekdotModel;
use App\Ceritawa\Repository\AnekdotRepository;
use App\Ceritawa\Service\AnekdotService;

class AnekdotController
{
  private static AnekdotModel $anekdotModel;
  private static AnekdotService $anekdotService;

  public function __construct()
  {
    $connDB = Database::connect();
    $anekdotRepository = new AnekdotRepository($connDB);

    self::$anekdotModel = new AnekdotModel();
    self::$anekdotService = new AnekdotService($anekdotRepository);
  }

  public function save(): void
  {
    try {
      self::$anekdotModel->penulis_anekdot = $_POST["penulis_anekdot"];
      self::$anekdotModel->email_penulis_anekdot = $_POST["email_penulis_anekdot"];
      self::$anekdotModel->judul_anekdot = $_POST["judul_anekdot"];
      self::$anekdotModel->konten_anekdot = $_POST["konten_anekdot"];

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
}