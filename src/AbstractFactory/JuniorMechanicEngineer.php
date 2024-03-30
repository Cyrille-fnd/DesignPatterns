<?php

namespace src\AbstractFactory;

use src\AbstractFactory\MechanicEngineerInterface;

class MechanicMechanicEngineer implements MechanicEngineerInterface
{

    public function doEngineerStuff(): void
    {
        echo 'doing some junior mechanic engineer stuff';
    }
}
