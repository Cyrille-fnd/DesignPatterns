<?php

namespace src\AbstractFactory;

use src\AbstractFactory\MechanicEngineerInterface;

class JuniorMechanicEngineer implements MechanicEngineerInterface
{
    public function doMechanicEngineerStuff(): void
    {
        echo 'doing some junior mechanic engineer stuff';
    }
}
