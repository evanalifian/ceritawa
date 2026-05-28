<?php

namespace App\Ceritawa\Controller;

use App\Ceritawa\Config\View;

class QuizController
{
  public function index(): void
  {
    View::render("quiz/index", [
      "title" => "Quiz Interaktif Teks Anekdot — Ceritawa",
      "scripts" => ["quiz.js"],
      "styles" => ["quiz.css"]
    ]);
  }
}