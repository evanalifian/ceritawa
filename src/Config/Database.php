<?php

namespace App\Ceritawa\Config;

class Database
{
  public static function connect(): \PDO
  {
    // Menggunakan $_ENV atau getenv dengan fallback nilai default Laragon
    $db_host = getenv('DB_HOST') ?: 'localhost';
    $db_port = getenv('DB_PORT') ?: '3306';
    $db_database = getenv('DB_DATABASE') ?: 'ceritawa';
    $db_username = getenv('DB_USERNAME') ?: 'root'; // Default Laragon adalah root
    $db_password = getenv('DB_PASSWORD') ?: '';     // Default Laragon adalah kosong

    // Perbaikan format DSN: memisahkan host dan port dengan semicolon (;)
    $dsn = "mysql:host=$db_host;port=$db_port;dbname=$db_database";

    // Menambahkan opsi error mode agar jika ada salah query, error-nya terlihat jelas
    $options = [
      \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
      \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC
    ];

    return new \PDO($dsn, $db_username, $db_password, $options);
  }
}