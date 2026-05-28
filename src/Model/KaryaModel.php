<?php

namespace App\Ceritawa\Model;

class KaryaModel {
  public int $id_karya;
  public int $id_user;
  public string $judul_karya;
  public string $penulis_karya;
  public string $email_penulis_karya;
  public string $tipe_karya;
  public string $created_at;
}