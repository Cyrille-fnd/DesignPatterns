<?php

namespace src\Adapter;

class SomeExternalHiringProcess
{
    public function SpamEngineerMailBoxTillHeResponds(): void
    {
        echo 'Spamming engineer mailBox till he answers <br />';
    }

    public function MakeEngineerDoSomeOnlineTest(): bool
    {
        $randomInt = rand(0,1);
        if ($randomInt === 0) {
            return false;
        } else {
            return true;
        }
    }

    public function ProposeSomeContractToEngineer(): bool
    {
        $randomInt = rand(0,1);
        if ($randomInt === 0) {
            return false;
        } else {
            return true;
        }
    }

    public function DoSomeMoreNegociationWithEngineer(): void
    {
        echo 'Doing some more negociation with engineer <br />';
    }

    public function FinallyHireEngineer(): void
    {
        echo 'a new engineer has been hired using some external process <br />';
    }
}
