<?php

declare(strict_types=1);

namespace App\Controller;

final class TalkController
{
    private $eventDispatcher;

    public function __construct(\Symfony\Component\EventDispatcher\EventDispatcher $eventDispatcher)
    {
        $this->eventDispatcher = $eventDispatcher;
    }

    public function run()
    {
        $this->eventDispatcher->dispatch();
    }
}
