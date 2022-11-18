<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

final class ConferenceFestival
{
    #[ORM\JoinTable(name: 'join_table_name')]
    #[ORM\JoinColumn(name: 'origin_id')]
    #[ORM\InverseJoinColumn(name: 'target_id')]
    private $collection;
}
