<?php

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\LevelSetList;
use Rector\Set\ValueObject\SetList;
use Rector\CodeQuality\Rector\If_\ExplicitBoolCompareRector;
use Rector\CodingStyle\Rector\Stmt\NewlineAfterStatementRector;
use Rector\Php81\Rector\ClassConst\FinalizePublicClassConstantRector;
use Rector\DeadCode\Rector\If_\RemoveAlwaysTrueIfConditionRector;

public static function applyRectorDefaults(RectorConfig $rectorConfig) {
    $rectorConfig->skip([
        __DIR__ . '/vendor',

        NewlineAfterStatementRector::class => [
            '*.phtml',
        ],

        ExplicitBoolCompareRector::class,
        FinalizePublicClassConstantRector::class,
        RemoveAlwaysTrueIfConditionRector::class
    ]);

    $rectorConfig->fileExtensions([
        'php',
        'phtml'
    ]);

    $rectorConfig->sets([
        LevelSetList::UP_TO_PHP_81,
        SetList::DEAD_CODE,
        SetList::CODE_QUALITY,
        SetList::CODING_STYLE
    ]);
};
