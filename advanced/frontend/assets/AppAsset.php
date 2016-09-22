<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
   // public $basePath = '@webroot';
    //public $baseUrl = '@web';
    public $sourcePath = '@bower/truechurch/';
    public $css = [
        'css/site.css',
        'fonts/novecento-font/novecento-font.css',
        'fonts/font-awesome.min.css',
        'style.css',
    ];
    public $js = [
        'js/ie-support/html5.js',
        'js/ie-support/respond.js',
        'js/jquery-1.11.1.min.js',
        'js/plugins.js',
        'js/app.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}