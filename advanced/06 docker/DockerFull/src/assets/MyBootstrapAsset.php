<?php

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class MyBootstrapAsset extends AssetBundle
{
    public $sourcePath = '@bower/bootstrap/dist';

    public $js = [
        'js/bootstrap.js',
    ];

    public $css = [
        'css/bootstrap.css',
    ];

    public $depends = [
        'yii\web\YiiAsset',
    ];
}
