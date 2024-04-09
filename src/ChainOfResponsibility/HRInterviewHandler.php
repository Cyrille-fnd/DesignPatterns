<?php

namespace src\ChainOfResponsibility;

class HRInterviewHandler extends BaseHiringProcessHandler
{
    function checkCandidate(EngineerInterface $candidate): void
    {
        if ($candidate->getMotivation() > 5) {
             echo 'The candidate motivation is validated. Go to the next step <br>';
             parent::callNext($candidate);
        } else {
            echo 'The candidate motivation is not validated <br>';
        }
    }
}
