<?php

namespace src\AbstractFactory;

use src\AbstractFactory\MechanicEngineerInterface;

class JuniorSoftwareEngineer implements SoftwareEngineerInterface
{

    public function doSoftwareEngineerStuff(): void
    {
        echo 'doing some junior software engineer stuff';
    }
}
