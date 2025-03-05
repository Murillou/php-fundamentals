<?php

namespace ScreenMatch\Calcs;

use ScreenMatch\Model\Avaliable;
use Throwable;

class RatingConverter
{
    public function convert(Avaliable $avaliable): float
    {
      try {
        $grade = $avaliable->media();

        return round($grade) / 2;

      } catch(Throwable){
        return 0;
      }
    }
}