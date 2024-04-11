<?php

namespace src\Observer;

interface HRPublisherInterface
{
    public function notifyCandidates(Job $job): void;

    public function addSubscriber(CandidateSubscriberInterface $candidateSubscriber);

    public function removeSubscriber(CandidateSubscriberInterface $candidateSubscriber);
}
