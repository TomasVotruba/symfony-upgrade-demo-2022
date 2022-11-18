<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Renaming\Rector\MethodCall\RenameMethodRector;
use Rector\Renaming\Rector\Name\RenameClassRector;
use Rector\Renaming\ValueObject\MethodCallRename;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths([__DIR__ . '/src']);

    // 1. rename event dispatcher class to its interface alternative
    $rectorConfig->ruleWithConfiguration(RenameClassRector::class, [
        'Symfony\Component\EventDispatcher\EventDispatcher'
        => 'Symfony\Component\EventDispatcher\EventDispatcherInterface'
    ]);

    // 2. second step - rename method as well
    $rectorConfig->ruleWithConfiguration(RenameMethodRector::class, [
        new MethodCallRename(
            'Symfony\Component\EventDispatcher\EventDispatcherInterface',
            'dispatch',
            'dispatchEvent'
        )
    ]);
};
