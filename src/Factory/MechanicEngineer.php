<?php

namespace src\Factory;

use EngineerInterface;

class MechanicEngineer implements EngineerInterface
{
    public function produceEngineerStuff(): void
    {
        echo 'here is some mechanic engineer stuff';
    }
}
