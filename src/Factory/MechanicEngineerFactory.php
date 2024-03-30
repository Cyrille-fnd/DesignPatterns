<?php

namespace src\Factory;

class MechanicEngineerFactory extends EngineerFactory
{
    public function hireEngineer(): MechanicEngineer
    {
        return new MechanicEngineer();
    }
}
