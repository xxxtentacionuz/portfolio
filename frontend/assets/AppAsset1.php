<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset1 extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
       'css/site.css',

       "portfoil/vendors/themify-icons/css/themify-icons.css",
       "portfoil/css/meyawo.css"

    ];
    public $js = [
        "portfoil/vendors/jquery/jquery-3.4.1.js",
        "portfoil/vendors/bootstrap/bootstrap.bundle.js",
        "portfoil/vendors/bootstrap/bootstrap.affix.js",
        "portfoil/js/meyawo.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap5\BootstrapAsset',
    ];
}
