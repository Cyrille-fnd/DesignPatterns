<?php

namespace src\Observer;

interface CandidateSubscriberInterface
{
    public function update(Job $job): void;

    public function apply(string $title): void;
}
