<?php

declare(strict_types=1);

namespace App;

use App\Entity\Conference;

final class ConferenceFactory
{
    public function create($talks)
    {
        return new Conference('SymfonyCon 2022', 'Paris', 'New York', $talks);
    }
}
