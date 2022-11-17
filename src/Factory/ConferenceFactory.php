<?php

declare(strict_types=1);

namespace App\Factory;

use App\Entity\Conference;

final class ConferenceFactory
{
    public function create($talks)
    {
        return new Conference('SymfonyCon 2022', $talks);
    }
}
