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

  public function page(): void
  {
    View::render("account");
  }

  public function update(): void
  {
    try {
      self::$userModel->name = $_POST["name"];
      self::$userModel->username = $_POST["username"];

      self::$userService->update(self::$userModel, $_SESSION['auth']["id"]);
      View::redirect("/account");
    } catch (ValidationException $e) {
      View::render("account", [
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
      View::render("account", [
        "error_message" => $e->getMessage()
      ]);
    }
  }
}