<?php

namespace App\Ceritawa\Service;

use App\Ceritawa\Exception\ValidationException;
use App\Ceritawa\Model\UserModel;
use App\Ceritawa\Repository\UserRepository;

class UserService
{
  private static UserRepository $userRepository;

  public function __construct(UserRepository $userRepository)
  {
    self::$userRepository = $userRepository;
  }

  public function findByID(int $id_user): array
  {
    return self::$userRepository->findByID($id_user);
  }

  public function update(UserModel $userModel, int $userID): void
  {
    $model = $userModel;

    self::updateValidation($model);

    $result = self::$userRepository->findByID($userID);

    if (!$result) {
      throw new ValidationException("User tidak cocok");
    }

    self::$userRepository->update($model, $userID);

    $_SESSION["auth"] = [
      "id_user" => $result["id_user"],
      "username" => $result["username"],
    ];
  }

  private static function updateValidation(UserModel $userModel): void
  {
    if (empty($userModel->nama_lengkap)) {
      throw new ValidationException("Nama tidak boleh kosong");
    }
  }

  public function delete(int $userID): void
  {
    self::$userRepository->delete($userID);
    session_destroy();
    session_unset();
  }
}