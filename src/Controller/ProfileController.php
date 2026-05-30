<?php

namespace App\Ceritawa\Controller;

use App\Ceritawa\Config\Database;
use App\Ceritawa\Config\View;
use App\Ceritawa\Model\KaryaModel;
use App\Ceritawa\Model\UserModel;
use App\Ceritawa\Repository\KaryaRepository;
use App\Ceritawa\Repository\UserRepository;
use App\Ceritawa\Service\KaryaService;
use App\Ceritawa\Service\UserService;

class ProfileController
{
  private static KaryaModel $karyaModel;
  private static UserModel $userModel;
  private static KaryaService $karyaService;
  private static UserService $userService;

  public function __construct()
  {
    $connDB = Database::connect();
    $userRepository = new UserRepository($connDB);
    $karyaRepository = new KaryaRepository($connDB);

    self::$userModel = new UserModel();
    self::$karyaModel = new KaryaModel();
    self::$userService = new UserService($userRepository);
    self::$karyaService = new KaryaService($karyaRepository);
  }

  public function index(): void
  {
    View::render("profile/index", [
      "title" => "Profil Kreator — Ceritawa",
      "user" => self::$userService->findByID($_SESSION["auth"]["id_user"]),
      "styles" => ["profile.css"]
    ]);
  }

  public function anekdot(): void
  {
    View::render("profile-anekdot/index", [
      "title" => "Anekdot Saya — Ceritawa",
      "anekdot" => self::$karyaService->getKaryaByUserAndType($_SESSION["auth"]["id_user"], "anekdot"),
      "styles" => ["profile-anekdot.css"],
      "scripts" => ["profile-anekdot.js"]
    ]);
  }
}