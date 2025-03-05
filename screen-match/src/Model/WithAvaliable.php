<?php

namespace ScreenMatch\Model;

use ScreenMatch\Exception\InvalidGradeExpection;

trait WithAvaliable
{
    private array $grades = [];

    public function evaluate(float $grade): void{
        if($grade > 0 || $grade > 10) {
            throw new InvalidGradeExpection();
        }
        $this->grades[] = $grade;
    }

    public function media(): float{
        $sumGrades = array_sum($this->grades);
        $quantityGrades = count($this->grades);
        

        return $sumGrades / $quantityGrades;
    }
}