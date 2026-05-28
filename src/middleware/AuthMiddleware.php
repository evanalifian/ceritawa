<?php

namespace App\Ceritawa\Middleware;

use App\Ceritawa\Config\View;

class AuthMiddleware
{
  public static function isAuth(): void
  {
    session_start();

    if (isset($_SESSION["auth"])) {
      View::redirect("/");
    }
  }

  public static function isNotAuth(): void
  {
    session_start();

    if (!isset($_SESSION["auth"])) {
      View::redirect("/login");
    }
  }
}