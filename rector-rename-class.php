<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Renaming\Rector\Name\RenameClassRector;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths([__DIR__ . '/src']);

    // rename event dispatcher class to its interface alternative
    $rectorConfig->ruleWithConfiguration(RenameClassRector::class, [
        'Symfony\Component\EventDispatcher\EventDispatcher'
        => 'Symfony\Component\EventDispatcher\EventDispatcherInterface'
    ]);
};
