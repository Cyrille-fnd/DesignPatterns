<?php

namespace src\Adapter;

class EngineerHiringPlatformAdapter implements EngineerHiringPlatformInterface
{
    private SomeExternalHiringProcess $externalHiringProcess;

    public function __construct(SomeExternalHiringProcess $externalHiringProcess)
    {
        $this->externalHiringProcess = $externalHiringProcess;
    }

    public function testEngineerSkills(): bool
    {
        $this->externalHiringProcess->SpamEngineerMailBoxTillHeResponds();

        return $this->externalHiringProcess->MakeEngineerDoSomeOnlineTest();
    }

    public function proposeContractToEngineer(): bool
    {
        if (!$this->externalHiringProcess->ProposeSomeContractToEngineer()) {
            return false;
        }

        $this->externalHiringProcess->DoSomeMoreNegociationWithEngineer();

        return true;
    }

    public function shakeHandsWithEngineer(): void
    {
        $this->externalHiringProcess->FinallyHireEngineer();
    }
}
