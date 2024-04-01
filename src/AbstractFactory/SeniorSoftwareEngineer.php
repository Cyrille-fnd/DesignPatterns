<?php

namespace src\AbstractFactory;

use src\AbstractFactory\SoftwareEngineerInterface;

class SeniorSoftwareEngineer implements SoftwareEngineerInterface
{
    public function doSoftwareEngineerStuff(): void
    {
        echo 'doing some senior software engineer stuff';
    }
}
