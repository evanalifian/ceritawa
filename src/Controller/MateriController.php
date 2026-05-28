<?php

namespace App\Ceritawa\Controller;

use App\Ceritawa\Config\View;

class MateriController
{
  public function index(): void
  {
    View::render("materi/index", [
      "title" => "Materi Teks Anekdot — Ceritawa"
    ]);
  }
}