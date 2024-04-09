<?php

namespace src\ChainOfResponsibility;

class SoftwareEngineer implements EngineerInterface
{
    private int $yearsOfExperience;

    private int $motivation;

    private int $teamSpirit;

    public function __construct(
        int $yearsOfExperience,
        int $motivation,
        int $teamSpirit
    ) {
        $this->yearsOfExperience = $yearsOfExperience;
        $this->motivation = $motivation;
        $this->teamSpirit = $teamSpirit;
    }

    public function getYearsOfExperience(): int
    {
        return $this->yearsOfExperience;
    }

    public function getMotivation(): int
    {
        return $this->motivation;
    }

    public function getTeamSpirit(): int
    {
        return $this->teamSpirit;
    }

    public function produceEngineerStuff(): void
    {
        echo 'Software engineer has produced engineer stuff';
    }
}
