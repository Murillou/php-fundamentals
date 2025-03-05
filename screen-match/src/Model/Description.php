<?php

namespace ScreenMatch\Model;

abstract class Description implements Avaliable
{
    use WithAvaliable;
    public function __construct(
        public readonly string $name, 
        public readonly int $dataRelease, 
        public readonly Gender $gender,
    ) {
    }

     abstract public function durationInMInutes(): int;
}