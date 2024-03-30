<?php

namespace src\Factory;

class SoftwareEngineerFactory extends EngineerFactory
{
    public function hireEngineer(): SoftwareEngineer
    {
        return new SoftwareEngineer();
    }
}
