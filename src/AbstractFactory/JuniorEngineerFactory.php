<?php

namespace src\AbstractFactory;

class SoftwareEngineerFactory implements EngineerFactoryInterface
{
    public function hireJuniorEngineer(): MechanicEngineerInterface
    {
        return new MechanicSoftwareEngineer();
    }

    public function hireSeniorEngineer(): SoftwareEngineerInterface
    {
        return new SoftwareSoftwareEngineer();
    }
}
