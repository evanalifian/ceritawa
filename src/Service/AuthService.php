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
      throw new ValidationException("Username does not exist");
    }

    if (!password_verify($model->password, $result["password"])) {
      throw new ValidationException("Password incorrect");
    }

    $_SESSION["auth"] = $result;
  }

  private static function authValidation(AuthModel $authModel): void
  {
    if (strlen($authModel->username) === 0 || strlen($authModel->password) === 0) {
      throw new ValidationException("Username and Password can noT be empty");
    }
  }
}