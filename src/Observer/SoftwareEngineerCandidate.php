<?php

namespace src\Observer;

class SoftwareEngineerCandidate implements CandidateSubscriberInterface
{
    public function update(Job $job): void
    {
        echo 'Software engineer has been notified of new job offer <br>';
        if ($job->getType() === 'Tech') {
            $this->apply($job->getTitle());
        }
    }

    public function apply(string $title): void
    {
        echo sprintf('Software engineer has applied to : %s <br>', $title);
    }
}
