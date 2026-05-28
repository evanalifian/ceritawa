<?php

namespace App\Ceritawa\Service;

use App\Ceritawa\Model\SignupModel;
use App\Ceritawa\Repository\UserRepository;
use App\Ceritawa\Exception\ValidationException;

class SignupService
{
  private static UserRepository $userRepository;

  public function __construct(UserRepository $userRepository)
  {
    self::$userRepository = $userRepository;
  }

  public function save(SignupModel $signupModel): void
  {
    $model = $signupModel;

    self::signupValidation($model);

    $result = self::$userRepository->findByUsername($model->username)->fetch();

    if ($result) {
      throw new ValidationException("Username sudah tersedia");
    }

    $model->password = password_hash($model->password, PASSWORD_BCRYPT);
    self::$userRepository->save($model);
  }

  private static function signupValidation(SignupModel $signupModel): void
  {
    if (empty($signupModel->nama_lengkap) || empty($signupModel->username) || empty($signupModel->password)) {
      throw new ValidationException("Username, password, dan nama lengkap tidak boleh kosong");
    }
  }
}