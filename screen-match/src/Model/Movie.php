<?php

class Movie extends Description 
{
    public function __construct(
        string $name, 
        int $dataRelease, 
        Gender $gender,
        public readonly int $durationInMinutes
    ) {
        parent::__construct($name, $dataRelease, $gender);
    }

    public function durationInMinutes(): int{
        return $this->durationInMinutes;
    }
}