<?php
namespace cakebake\bootstrap\select;

use Yii;
use yii\web\AssetBundle;
use yii\helpers\ArrayHelper;
use yii\helpers\Json;

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

    /**
     * Connect a language file
     */
    public function init()
    {
        parent::init();

        $language = str_replace('-', '_', Yii::$app->language);
        $this->js[] = 'js/i18n/defaults-' . $language . '.js';
    }
    
    /**
     * @param View $view
     * @param array $options
     * @return static the registered asset bundle instance
     * @see http://silviomoreto.github.io/bootstrap-select/3/#options
     */
    public static function register($view, $options = [])
    {
        $o = ArrayHelper::merge([
            'selector' => 'select',
            'menuArrow' => true,
            'tickIcon' => true,
            'selectpickerOptions' => [
                'style' => 'btn-default form-control',
            ],
        ], $options);

        if (!is_string($o['selector']) || empty($o['selector']))
            return false;

        $js = '';

        if ($o['menuArrow']) {
            $js .= '$("' . $o['selector'] . '").addClass("show-menu-arrow");' . PHP_EOL;
        }

        if ($o['tickIcon']) {
            $js .= '$("' . $o['selector'] . '").addClass("show-tick");' . PHP_EOL;
        }

        //Enable Bootstrap-Select for $o['selector']
        $js .= '$("' . $o['selector'] . '").selectpicker(' . Json::htmlEncode($o['selectpickerOptions']) . ');' . PHP_EOL;

        //Update Bootstrap-Select by :reset click
        $js .= '$(":reset").click(function(){
            $(this).closest("form").trigger("reset");
            $("' . $o['selector'] . '").selectpicker("refresh");
        });';

        parent::register($view);
        $view->registerJs($js);
    }
}
