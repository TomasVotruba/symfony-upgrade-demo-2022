<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\LevelSetList;
use Rector\Symfony\Set\SymfonyLevelSetList;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->import(
        __DIR__ . '/rector-rename-method.php'
    );
    $rectorConfig->import(
        __DIR__ . '/rector-attributes.php'
    );

    // "the last upgrade"
    $rectorConfig->sets([
        // LevelSetList::UP_TO_PHP_81,
        // SymfonyLevelSetList::UP_TO_SYMFONY_61
    ]);
};
