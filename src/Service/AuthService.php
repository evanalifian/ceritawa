<?php

namespace App\Ceritawa\Service;

use App\Ceritawa\Model\AuthModel;
use App\Ceritawa\Repository\UserRepository;
use App\Ceritawa\Exception\ValidationException;

class AuthService
{
  private static UserRepository $userRepository;

  public function __construct(UserRepository $userRepository)
  {
    self::$userRepository = $userRepository;
  }

  public function auth(AuthModel $authModel): void
  {
    $model = $authModel;

    self::authValidation($model);

    $result = self::$userRepository->findByUsername($model->username)->fetch();

    if (!$result) {
      throw new ValidationException("Username tidak ditemukan");
    }

    if (!password_verify($model->password, $result["password"])) {
      throw new ValidationException("Password salah");
    }

    $_SESSION["auth"] = [
      "id_user" => $result["id_user"],
      "username" => $result["username"],
    ];
  }

  private static function authValidation(AuthModel $authModel): void
  {
    if (empty($authModel->username) || empty($authModel->password)) {
      throw new ValidationException("Username dan password tidak boleh kosong");
    }
  }
}