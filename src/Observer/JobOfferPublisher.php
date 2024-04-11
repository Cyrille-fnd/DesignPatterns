<?php

namespace src\Observer;

class JobOfferPublisher implements HRPublisherInterface
{
    /** @var CandidateSubscriberInterface[] */
    private array $subscribers = [];

    public function notifyCandidates(Job $job): void
    {
        foreach ($this->subscribers as $subscriber) {
            $subscriber->update($job);
        }
    }

    public function addSubscriber(CandidateSubscriberInterface $candidateSubscriber): void
    {
        if (!in_array($candidateSubscriber, $this->subscribers)) {
            $this->subscribers[] = $candidateSubscriber;
        }
    }

    public function removeSubscriber(CandidateSubscriberInterface $candidateSubscriber): void
    {
        $this->subscribers = array_filter(
            $this->subscribers, function (CandidateSubscriberInterface $subscriber) use ($candidateSubscriber) {
            return $subscriber !== $candidateSubscriber;
        });
    }
}
