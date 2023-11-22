<?php

declare(strict_types=1);

use Rector\CodeQuality\Rector\Class_\InlineConstructorDefaultToPropertyRector;
use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\LevelSetList;
use Rector\Set\ValueObject\SetList;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths([
        __DIR__ . '/src',
    ]);

    // register a single rule
    $rectorConfig->rule(InlineConstructorDefaultToPropertyRector::class);
//    $rectorConfig->sets([SetList::DEAD_CODE]);
//    $rectorConfig->sets([SetList::PHP_83]);
    $rectorConfig->sets([LevelSetList::UP_TO_PHP_83]);

    // define sets of rules
//        $rectorConfig->sets([
//            LevelSetList::UP_TO_PHP_83,
//            SetList::DEAD_CODE,
//        ]);
};
