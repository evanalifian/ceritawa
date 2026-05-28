<?php

namespace App\Ceritawa\Controller;

use App\Ceritawa\Config\View;

class GaleriController
{
  public function index(): void
  {
    View::render("galeri/index", [
      "title" => "Galeri Karya Siswa — Ceritawa",
      "scripts" => ["galeri.js"],
      "styles" => ["galeri.css"]
    ]);
  }
}