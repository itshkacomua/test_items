<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'modules' => [
        'test1' => [
            'class' => 'common\modules\test1\Module',
        ],
        'test2' => [
            'class' => 'common\modules\test2\Module',
        ],
    ],
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'form' => [
            'class' => 'common\components\Form',
        ],
    ],
];
