yii2-bootstrap-select
=====================

A yii2 wrapper package for the custom select for @twitter bootstrap using button dropdown  http://silviomoreto.github.io/bootstrap-select/

### Install via Composer

If you do not have [Composer](http://getcomposer.org/), you may install it by following the instructions
at [getcomposer.org](http://getcomposer.org/doc/00-intro.md#installation-nix).

You can then install the package using the following command:

    php composer.phar require --prefer-dist cakebake/yii2-bootstrap-select "*"

or add

    "cakebake/yii2-bootstrap-select": "*"

to the require section of your ```composer.json``` file and run ```php composer.phar update```.

### Usage

Add this in your view (If you want it globally, you can take the file "views/layouts/main.php"):

    cakebake\bootstrap\select\BootstrapSelectAsset::register($this);

This automatically integrates the files and converts all select fields automatically.

If you want more control, you can use the available options.

    cakebake\bootstrap\select\BootstrapSelectAsset::register($this, [
        'selector' => '.selectpicker', //The jQuery selector (all select forms by default)
        'menuArrow' => true, //You can also show the tick icon on single select
        'tickIcon' => false, //The bootstrap menu arrow can be added
        'selectpickerOptions' => [ //available bootstrap-select data options @see http://silviomoreto.github.io/bootstrap-select/3/#options
            'size' => 3, //example option @see http://silviomoreto.github.io/bootstrap-select/3/#options
            'width' => '50%', //example option @see http://silviomoreto.github.io/bootstrap-select/3/#options
        ],
    ]);

Checkout the [documentation](http://silviomoreto.github.io/bootstrap-select/3/) for further information.
