<?php

namespace ScreenMatch\Calcs;
class MarathonCalculator
{
      private int $durationMarathon = 0;
      public function include($description): void
      {
        $this->durationMarathon += $description->durationInMinutes();
      }

      public function getDuration(): int {
        return $this->durationMarathon;
      }
}