<?php

namespace App\Ceritawa\Repository;

use App\Ceritawa\Model\UserModel;
use App\Ceritawa\Model\SignupModel;

class UserRepository
{
  private static \PDO $connDB;

  public function __construct(\PDO $connDB)
  {
    self::$connDB = $connDB;
  }

  public function findByID(int $userID): array
  {
    $statement = self::$connDB->prepare("SELECT * FROM users WHERE id_user = ?");
    $statement->execute([$userID]);
    return $statement->fetch();
  }

  public function findByUsername(string $username): \PDOStatement
  {
    $statement = self::$connDB->prepare("SELECT * FROM users WHERE username = ?");
    $statement->execute([$username]);
    return $statement;
  }

  public function save(SignupModel $signupModel): \PDOStatement
  {
    $statement = self::$connDB->prepare("INSERT INTO users (username, password, nama_lengkap) VALUES (?, ?, ?)");
    $statement->execute([$signupModel->username, $signupModel->password, $signupModel->nama_lengkap]);
    return $statement;
  }

  public function update(UserModel $userModel, int $userID): \PDOStatement
  {
    $statement = self::$connDB->prepare("UPDATE users SET nama_lengkap = ?, email = ? WHERE id_user = ?");
    $statement->execute([$userModel->nama_lengkap, $userModel->email, $userID]);
    return $statement;
  }

  public function delete(int $userID): \PDOStatement
  {
    $statement = self::$connDB->prepare("DELETE FROM users WHERE id = ?");
    $statement->execute([$userID]);
    return $statement;
  }
}