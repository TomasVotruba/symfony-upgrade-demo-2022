<?php

declare(strict_types=1);

namespace App\Controller;

use App\Factory\ConferenceFactory;

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

    public function create()
    {
        $conferenceFactory = new ConferenceFactory();
        return $conferenceFactory->create([]);
    }
}
