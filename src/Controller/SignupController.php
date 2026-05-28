<?php

namespace App\Ceritawa\Controller;

use App\Ceritawa\Config\View;
use App\Ceritawa\Config\Database;
use App\Ceritawa\Model\SignupModel;
use App\Ceritawa\Repository\UserRepository;
use App\Ceritawa\Service\SignupService;
use App\Ceritawa\Exception\ValidationException;

class SignupController
{
  static private SignupModel $signupModel;
  static private SignupService $signupService;

  public function __construct()
  {
    $connDB = Database::connect();
    $userRepository = new UserRepository($connDB);

    self::$signupModel = new SignupModel();
    self::$signupService = new SignupService($userRepository);
  }

  public function page(): void
  {
    View::render("auth/signup", [
      "title" => "Daftar Akun Baru — Ceritawa"
    ]);
  }

  public function save(): void
  {
    try {
      self::$signupModel->name = $_POST["name"];
      self::$signupModel->username = $_POST["username"];
      self::$signupModel->password = $_POST["password"];

      self::$signupService->save(self::$signupModel);
      View::redirect("/login");
    } catch (ValidationException $e) {
      View::render("auth/signup", [
        "title" => "Daftar Akun Baru — Ceritawa",
        "error_message" => $e->getMessage()
      ]);
    }
  }
}