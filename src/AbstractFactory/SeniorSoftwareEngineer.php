<?php

namespace src\AbstractFactory;

use src\AbstractFactory\SoftwareEngineerInterface;

class SoftwareSoftwareEngineer implements SoftwareEngineerInterface
{
    public function doEngineerStuff(): void
    {
        echo 'doing some senior software engineer stuff';
    }
}
