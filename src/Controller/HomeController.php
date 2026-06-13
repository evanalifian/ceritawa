<?php

namespace App\Ceritawa\Controller;

use App\Ceritawa\Config\View;

class HomeController
{
  public function index(): void
  {
    View::render("landing/index", [
      "title" => "Ceritawa — Mading Digital Teks Anekdot",
      "scripts" => ["landing.js"]
    ]);
  }
}