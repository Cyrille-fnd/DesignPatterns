<?php

namespace src\AbstractFactory;

use src\AbstractFactory\SoftwareEngineerInterface;

class SeniorMechanicEngineer implements MechanicEngineerInterface
{

    public function doMechanicEngineerStuff(): void
    {
        echo 'doing some senior mechanic engineer stuff';
    }
}
