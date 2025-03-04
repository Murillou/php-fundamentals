<?php

class Description{
    private array $grades = [];

    public function __construct(
        public readonly string $name, 
        public readonly int $dataRelease, 
        public readonly Gender $gender,
    ) {
        $this->grades = [];
    }

    public function evaluate(float $grade): void{
        $this->grades[] = $grade;
    }

    public function media(): float{
        $sumGrades = array_sum($this->grades);
        $quantityGrades = count($this->grades);

        return $sumGrades / $quantityGrades;
    }

    public function durationInMInutes(): int{
        return 0;
    }
}