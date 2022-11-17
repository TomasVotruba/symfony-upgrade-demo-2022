<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

final class Conference
{
    public function __construct(string $name)
    {
    }

    /**
     * @ORM\Column(type="string", length=255)
     */
    public $name;
}
