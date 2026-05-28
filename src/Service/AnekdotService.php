<?php

namespace App\Ceritawa\Service;

use App\Ceritawa\Exception\ValidationException;
use App\Ceritawa\Model\AnekdotModel;
use App\Ceritawa\Repository\AnekdotRepository;

class AnekdotService
{
  private static AnekdotRepository $anekdotRepository;

  public function __construct(AnekdotRepository $anekdotRepository)
  {
    self::$anekdotRepository = $anekdotRepository;
  }

  public function save(AnekdotModel $model): void
  {
    self::saveValidate($model);
    self::$anekdotRepository->save($model);
  }

  private function saveValidate(AnekdotModel $model): void
  {
    if (empty($model->konten_anekdot)) {
      throw new ValidationException("Form tidak boleh kosong");
    }
  }
}