<?php

namespace App\Ceritawa\Model;

class AnekdotModel
{
  public int $id_anekdot;
  public int $id_user;
  public string $penulis_anekdot;
  public string $email_penulis_anekdot;
  public string $judul_anekdot;
  public string $konten_anekdot;
  public string $created_at;
}