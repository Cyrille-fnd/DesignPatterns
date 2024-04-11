<?php

namespace src\Observer;

class HRDepartment
{
    private HRPublisherInterface $jobOfferPublisher;

    public function __construct(HRPublisherInterface $jobOfferPublisher)
    {
        $this->jobOfferPublisher = $jobOfferPublisher;
    }

    public function createJob(): void
    {
        $randomInt = rand(0, 1);
        if ($randomInt === 0 ) {
            $job = new Job('A brand new position as product owner', 'Product');
        } else {
            $job = new Job('A brand new position as software engineer', 'Tech');
        }

        $this->jobOfferPublisher->notifyCandidates($job);
    }
}
