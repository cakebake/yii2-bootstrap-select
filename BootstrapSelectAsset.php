<?php
namespace cakebake\bootstrap\select;

use yii\web\AssetBundle;

class BootstrapSelectAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bootstrap-select/bootstrap-select/dist';
    public $css = [
        'css/bootstrap-select.min.css',
    ];
    public $js = [
        'js/bootstrap-select.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
