<?php

namespace ScreenMatch\Model;
interface Avaliable
{
     public function evaluate(float $grade): void;
     public function media(): float;
}
