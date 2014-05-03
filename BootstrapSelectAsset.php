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
		'bootstrap-select.min.js',
	];
    public $depends = [
        'yii\bootstrap\BootstrapAsset',
    ];
}
