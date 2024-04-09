<?php

namespace src\ChainOfResponsibility;

interface HiringProcessHandlerInterface
{
    public function checkCandidate(EngineerInterface $candidate): void;
}
