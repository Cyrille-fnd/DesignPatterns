<?php

namespace src\AbstractFactory;

use src\AbstractFactory\MechanicEngineerInterface;

class MechanicSoftwareEngineer implements MechanicEngineerInterface
{

    public function doEngineerStuff(): void
    {
        echo 'doing some junior software engineer stuff';
    }
}
