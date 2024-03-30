<?php

namespace src\Factory;

use EngineerInterface;

class SoftwareEngineer implements EngineerInterface
{
    public function produceEngineerStuff(): void
    {
        echo 'here is some software engineer stuff';
    }
}
