<?php

namespace ScreenMatch\Model;


class Series extends Description 
{
    public function __construct(
        string $name, 
        int $dataRelease, 
        Gender $gender,
        public readonly int $season,
        public readonly int $episodesBySeason,
        public readonly int $minutesByEpisodes
    ) {
      parent::__construct($name, $dataRelease, $gender);
    }

    #[\Override]
    public function durationInMinutes(): int{
      return $this->season * $this->episodesBySeason * $this->minutesByEpisodes;
    }
}