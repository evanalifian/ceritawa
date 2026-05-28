<?php

namespace App\Ceritawa\Controller;

use App\Ceritawa\Config\View;
use App\Ceritawa\Config\Database;
use App\Ceritawa\Model\AuthModel;
use App\Ceritawa\Repository\UserRepository;
use App\Ceritawa\Service\AuthService;
use App\Ceritawa\Exception\ValidationException;

class AuthController
{
  private static AuthModel $authModel;
  private static AuthService $authService;

  public function __construct()
  {
    $connDB = Database::connect();
    $userRepository = new UserRepository($connDB);

    self::$authModel = new AuthModel();
    self::$authService = new AuthService($userRepository);
  }

  public function page(): void
  {
    View::render("auth/login", [
      "title" => "Masuk — Ceritawa"
    ]);
  }

  public function auth(): void
  {
    try {
      self::$authModel->username = $_POST["username"];
      self::$authModel->password = $_POST["password"];

      self::$authService->auth(self::$authModel);
      View::redirect("/account");
    } catch (ValidationException $e) {
      View::render("auth/login", [
        "title" => "Masuk — Ceritawa",
        "error_message" => $e->getMessage()
      ]);
    }
  }

  public function logout(): void
  {
    session_destroy();
    session_unset();
    View::redirect("/login");
  }
}