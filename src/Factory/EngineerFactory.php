<?php

namespace src\Factory;

use EngineerInterface;

abstract class EngineerFactory
{
    public function letEngineerAloneSoStuffCanBeDone()
    {
        $engineer = $this->hireEngineer();
        $engineer->produceEngineerStuff();
    }

    abstract public function hireEngineer(): EngineerInterface;
}
