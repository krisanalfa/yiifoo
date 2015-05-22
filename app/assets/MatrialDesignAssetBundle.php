<?php namespace app\assets;

use yii\web\AssetBundle;

class MatrialDesignAssetBundle extends AssetBundle
{
    public $sourcePath = '@bower/bootstrap-material-design/dist';

    public $css = [
        'css/roboto.css',
        'css/material-fullpalette.css',
        'css/ripples.css',
    ];

    public $js = [
        'js/material.js',
        'js/ripples.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
