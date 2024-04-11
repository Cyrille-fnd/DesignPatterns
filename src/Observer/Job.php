<?php

namespace src\Observer;

class Job
{
    private string $title;

    private string $type;

    public function __construct(
        string $title,
        string $type
    ) {
        $this->title = $title;
        $this->type = $type;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getType(): string
    {
        return $this->type;
    }
}
