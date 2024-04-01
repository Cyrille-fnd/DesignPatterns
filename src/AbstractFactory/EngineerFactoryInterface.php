<?php

namespace src\AbstractFactory;

interface EngineerFactoryInterface
{
    public function hireMechanicEngineer(): MechanicEngineerInterface;

    public function hireSoftwareEngineer(): SoftwareEngineerInterface;
}
