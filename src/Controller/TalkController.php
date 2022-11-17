<?php

declare(strict_types=1);

namespace App\Controller;

use App\Factory\ConferenceFactory;
use Symfony\Component\EventDispatcher\EventDispatcher;

final class TalkController
{
    private $eventDispatcher;

    public function __construct(EventDispatcher $eventDispatcher)
    {
        $this->eventDispatcher = $eventDispatcher;
    }

    public function run()
    {
        $this->eventDispatcher->dispatch('conference_event');
    }

    public function create()
    {
        $conferenceFactory = new ConferenceFactory();
        return $conferenceFactory->create([]);
    }
}
