<?php

namespace src\AbstractFactory;

use src\AbstractFactory\SoftwareEngineerInterface;

class SoftwareMechanicEngineer implements SoftwareEngineerInterface
{

    public function doEngineerStuff(): void
    {
        echo 'doing some senior mechanic engineer stuff';
    }
}
