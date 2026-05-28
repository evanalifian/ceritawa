<?php

namespace App\Ceritawa\Controller;

use App\Ceritawa\Config\Database;
use App\Ceritawa\Config\View;
use App\Ceritawa\Repository\KaryaRepository;
use App\Ceritawa\Service\KaryaService;

class GaleriController
{
  private static KaryaService $karyaService;

  public function __construct()
  {
    $connDB = Database::connect();
    $karyaRepository = new KaryaRepository($connDB);

    self::$karyaService = new KaryaService($karyaRepository);
  }

  public function index(): void
  {
    View::render("galeri/index", [
      "title" => "Galeri Karya Siswa — Ceritawa",
      "scripts" => ["galeri.js"],
      "styles" => ["galeri.css"],
      "karya" => self::$karyaService->getAllKarya()
    ]);
  }
}