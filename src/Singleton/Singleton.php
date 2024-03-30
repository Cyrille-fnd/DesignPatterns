<?php

namespace src\Singleton;

use DateTime;

class Singleton
{
    private static Singleton $instance;

    private DateTime $createdAt;

    private function __construct()
    {
        $this->createdAt = new DateTime();
    }

    public static function getInstance(): Singleton
    {
        if (!isset(self::$instance)) {
            self::$instance = new self;
        }

        return self::$instance;
    }

    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }
}
