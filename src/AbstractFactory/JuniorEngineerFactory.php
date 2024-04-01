<?php

namespace src\AbstractFactory;

class JuniorEngineerFactory implements EngineerFactoryInterface
{
    public function hireMechanicEngineer(): MechanicEngineerInterface
    {
        return new JuniorMechanicEngineer();
    }

    public function hireSoftwareEngineer(): SoftwareEngineerInterface
    {
        return new JuniorSoftwareEngineer();
    }
}
