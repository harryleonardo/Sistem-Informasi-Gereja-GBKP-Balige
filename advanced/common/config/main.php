<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],

    'components' => [
    	'authManager' => [
    		'class' => 'yii\rbac\DbManager',
    		],
    	],

    'modules' => [
    	'auth' => [
    		'class' => 'common\modules\auth\Module',
    		],
    	],
];
