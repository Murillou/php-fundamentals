<?php

namespace ScreenMatch\Model;
class Episode implements Avaliable
{
      use WithAvaliable;
      public function __construct(
      public readonly Series $series,
      public readonly string $name,
      public readonly int $number,
    ){
    }
}