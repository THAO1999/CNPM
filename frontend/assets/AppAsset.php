<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
       'css/style.css',
      'css/login.css',
       'css/styleDetail.css',
        'css/styleDetail2.css',
      'css/main.css',
   
       
    ];
    public $js = [
        // login
        "vendor/jquery/jquery-3.2.1.min.js",
        "vendor/bootstrap/js/popper.js",
        "vendor/bootstrap/js/bootstrap.min.js",
        "vendor/select2/select2.min.js",
        "vendor/tilt/tilt.jquery.min.js",
        "js/main.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
