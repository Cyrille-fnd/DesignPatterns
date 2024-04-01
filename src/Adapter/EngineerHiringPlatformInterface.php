<?php

namespace src\Adapter;

interface EngineerHiringPlatformInterface
{
    public function testEngineerSkills(): bool;

    public function proposeContractToEngineer(): bool;

    public function shakeHandsWithEngineer(): void;
}
