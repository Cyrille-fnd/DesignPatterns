<?php

namespace src\ChainOfResponsibility;

class TechLeadInterviewHandler extends BaseHiringProcessHandler
{
    function checkCandidate(EngineerInterface $candidate): void
    {
        if ($candidate->getYearsOfExperience() > 5) {
            echo 'The candidate experience is validated. Go to the next step <br>';
            parent::callNext($candidate);
        } else {
            echo 'The candidate experience is not validated <br>';
        }
    }
}
