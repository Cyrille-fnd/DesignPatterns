<?php

namespace src\AbstractFactory;

class MechanicEngineerFactory implements EngineerFactoryInterface
{
    public function hireMechanicEngineer(): MechanicEngineerInterface
    {
        return new MechanicMechanicEngineer();
    }

    public function hireSeniorEngineer(): SoftwareEngineerInterface
    {
        return new SoftwareMechanicEngineer();
    }
}
