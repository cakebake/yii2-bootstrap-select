<?php
namespace cakebake\bootstrap\select;

use yii\web\AssetBundle;

class BootstrapSelectAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bootstrap-select/bootstrap-select';
    public $css = [
        'bootstrap-select.min.css',
    ];
	public $js = [
		'bootstrap-select.js',
	];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
