<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace bobroid\sweetalert;

use yii\web\AssetBundle;

class SweetalertAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bobroid/yii2-sweetalert/assets';
    public $publishOptions = [
        'forceCopy' => true
    ];
    public $css = [
        'css/sweetalert.css',
    ];
    public $js = [
        'js/sweetalert.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset'
    ];
}

