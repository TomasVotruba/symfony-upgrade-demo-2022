<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Doctrine\Set\DoctrineSetList;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths([__DIR__ . '/src/Entity/ConferenceFestival.php']);

    // 3. rename Doctrine annotations to PHP 8 native attributes
    $rectorConfig->sets([
        DoctrineSetList::ANNOTATIONS_TO_ATTRIBUTES,
    ]);
};
