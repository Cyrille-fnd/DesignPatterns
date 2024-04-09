<?php

namespace src\ChainOfResponsibility;

interface EngineerInterface
{
    public function produceEngineerStuff(): void;

    public function getYearsOfExperience(): int;

    public function getMotivation(): int;

    public function getTeamSpirit(): int;
}
