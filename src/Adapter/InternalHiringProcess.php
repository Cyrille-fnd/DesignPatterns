<?php

namespace src\Adapter;

class InternalHiringProcess implements EngineerHiringPlatformInterface
{

    public function testEngineerSkills(): bool
    {
        $randomInt = rand(0,1);
        if ($randomInt === 0) {
            return false;
        } else {
            return true;
        }
    }

    public function proposeContractToEngineer(): bool
    {
        $randomInt = rand(0,1);
        if ($randomInt === 0) {
            return false;
        } else {
            return true;
        }
    }

    public function shakeHandsWithEngineer(): void
    {
        echo 'a new engineer has been hired using internal process';
    }
}
