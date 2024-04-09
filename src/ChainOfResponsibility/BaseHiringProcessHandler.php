<?php

namespace src\ChainOfResponsibility;

abstract class BaseHiringProcessHandler implements HiringProcessHandlerInterface
{
    private ?HiringProcessHandlerInterface $nextHandler = null;

    public function setNextHandler(HiringProcessHandlerInterface $nextHandler): void
    {
        $this->nextHandler = $nextHandler;
    }

    public function callNext(EngineerInterface $candidate): void
    {
        if ($this->nextHandler !== null) {
            $this->nextHandler->checkCandidate($candidate);
        } else {
            echo 'No next step ! The candidate finished the process succesfully <br>';
        }
    }

    abstract function checkCandidate(EngineerInterface $candidate): void;
}
