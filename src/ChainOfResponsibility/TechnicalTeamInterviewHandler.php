<?php

namespace src\ChainOfResponsibility;

class TechnicalTeamInterviewHandler extends BaseHiringProcessHandler
{
    function checkCandidate(EngineerInterface $candidate): void
    {
        if ($candidate->getTeamSpirit() > 5) {
            echo 'The candidate team spirit is validated. Go to the next step <br>';
            parent::callNext($candidate);
        } else {
            echo 'The candidate team spirit is not validated <br>';
        }
    }
}
