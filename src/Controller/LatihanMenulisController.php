<?php

namespace App\Ceritawa\Controller;

use App\Ceritawa\Config\View;

class LatihanMenulisController
{
  public function index(): void
  {
    View::render("latihan-menulis/index", [
      "title" => "Latihan Menulis Teks Anekdot — Ceritawa",
      "scripts" => ["latihan-menulis.js"],
      "styles" => ["latihan-menulis.css"]
    ]);
  }
}