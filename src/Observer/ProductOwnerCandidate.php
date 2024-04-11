<?php

namespace src\Observer;

class ProductOwnerCandidate implements CandidateSubscriberInterface
{
    public function update(Job $job): void
    {
        echo 'Product owner has been notified of new job offer <br>';
        if ($job->getType() === 'Product') {
            $this->apply($job->getTitle());
        }
    }

    public function apply(string $title): void
    {
        echo sprintf('Product owner has applied to : %s <br>', $title);
    }
}
