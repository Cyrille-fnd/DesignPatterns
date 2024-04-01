<?php

namespace src\AbstractFactory;

class SeniorEngineerFactory implements EngineerFactoryInterface
{
    public function hireMechanicEngineer(): MechanicEngineerInterface
    {
        return new SeniorMechanicEngineer();
    }

    public function hireSoftwareEngineer(): SoftwareEngineerInterface
    {
        return new SeniorSoftwareEngineer();
    }
}
