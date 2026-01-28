<?php

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\LevelSetList;
use Rector\Set\ValueObject\SetList;
use Rector\CodeQuality\Rector\If_\ExplicitBoolCompareRector;
use Rector\CodingStyle\Rector\Stmt\NewlineAfterStatementRector;
use Rector\Php73\Rector\FuncCall\JsonThrowOnErrorRector;
use Rector\DeadCode\Rector\If_\RemoveAlwaysTrueIfConditionRector;
use Rector\DeadCode\Rector\ClassMethod\RemoveUselessReturnTagRector;
use Rector\DeadCode\Rector\ClassMethod\RemoveUselessParamTagRector;
use Rector\Php80\Rector\FunctionLike\MixedTypeRector;

function applyRectorDefaults(RectorConfig $rectorConfig) {
    $rectorConfig->phpstanConfig(__DIR__ . '/../../../phpstan.neon');

    $rectorConfig->fileExtensions([
        'php'
    ]);

    $rectorConfig->sets([
        LevelSetList::UP_TO_PHP_83,
        SetList::DEAD_CODE,
        SetList::CODE_QUALITY,
        SetList::CODING_STYLE
    ]);
};

function outeredgeRectorSkipDefaults() {
    return [
        __DIR__ . '/vendor',

        NewlineAfterStatementRector::class => [
            '*.phtml',
        ],

        // Stop rector breaking short open tags
        RemoveAlwaysTrueIfConditionRector::class => [
            '*.phtml',
        ],

        // Magento WebAPI requires @return docblocks in API interfaces for serialization
        RemoveUselessReturnTagRector::class => [
            __DIR__ . '/app/code/**/Api/**',
        ],
<?php

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\LevelSetList;
use Rector\Set\ValueObject\SetList;
use Rector\CodeQuality\Rector\If_\ExplicitBoolCompareRector;
use Rector\CodingStyle\Rector\Stmt\NewlineAfterStatementRector;
use Rector\Php73\Rector\FuncCall\JsonThrowOnErrorRector;
use Rector\DeadCode\Rector\If_\RemoveAlwaysTrueIfConditionRector;
use Rector\DeadCode\Rector\ClassMethod\RemoveUselessReturnTagRector;
use Rector\DeadCode\Rector\ClassMethod\RemoveUselessParamTagRector;

function applyRectorDefaults(RectorConfig $rectorConfig) {
    $rectorConfig->phpstanConfig(__DIR__ . '/../../../phpstan.neon');

    $rectorConfig->fileExtensions([
        'php'
    ]);

    $rectorConfig->sets([
        LevelSetList::UP_TO_PHP_83,
        SetList::DEAD_CODE,
        SetList::CODE_QUALITY,
        SetList::CODING_STYLE
    ]);
};

function outeredgeRectorSkipDefaults() {
    return [
        __DIR__ . '/vendor',

        NewlineAfterStatementRector::class => [
            '*.phtml',
        ],

        // Stop rector breaking short open tags
        RemoveAlwaysTrueIfConditionRector::class => [
            '*.phtml',
        ],

        // Magento WebAPI requires @return and @param docblocks in API interfaces for serialization
        RemoveUselessReturnTagRector::class => [
            '**/Api/**',
        ],
        RemoveUselessParamTagRector::class => [
            '**/Api/**',
        ],
        MixedTypeRector::class => [
            '**/Api/**',
        ],

        ExplicitBoolCompareRector::class,
        JsonThrowOnErrorRector::class
    ];
}
