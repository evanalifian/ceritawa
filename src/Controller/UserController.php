<?php

namespace App\Ceritawa\Controller;

use App\Ceritawa\Config\Database;
use App\Ceritawa\Config\View;
use App\Ceritawa\Exception\ValidationException;
use App\Ceritawa\Model\UserModel;
use App\Ceritawa\Repository\UserRepository;
use App\Ceritawa\Service\UserService;

class UserController
{
  private static UserModel $userModel;
  private static UserService $userService;

  public function __construct()
  {
    $connDB = Database::connect();
    $userRepository = new UserRepository($connDB);

    self::$userModel = new UserModel();
    self::$userService = new UserService($userRepository);
  }

  public function update(): void
  {
    try {
      self::$userModel->nama_lengkap = $_POST["nama_lengkap"];
      self::$userModel->email = $_POST["email"];

      self::$userService->update(self::$userModel, $_SESSION['auth']["id_user"]);
      View::redirect("/profile");
    } catch (ValidationException $e) {
      View::render("profile/index", [
        "title" => "Profil Kreator — Ceritawa",
        "user" => self::$userService->findByID($_SESSION["auth"]["id_user"]),
        "styles" => ["profile.css"],
        "error_message" => $e->getMessage()
      ]);
    }
  }

  public function delete(): void
  {
    try {
      self::$userService->delete($_SESSION['auth']["id"]);
      View::redirect("/");
    } catch (ValidationException $e) {
      View::render("profile/index", [
        "title" => "Profil Kreator — Ceritawa",
        "user" => self::$userService->findByID($_SESSION["auth"]["id_user"]),
        "styles" => ["profile.css"],
        "error_message" => $e->getMessage()
      ]);
    }
  }
}