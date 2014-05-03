yii2-bootstrap-select
=====================

  A yii2 wrapper package for the custom select for @twitter bootstrap using button dropdown  http://silviomoreto.github.io/bootstrap-select/

### Install via Composer

If you do not have [Composer](http://getcomposer.org/), you may install it by following the instructions
at [getcomposer.org](http://getcomposer.org/doc/00-intro.md#installation-nix).

You can then install the package using the following command:

~~~
php composer.phar require --prefer-dist cakebake/yii2-bootstrap-select "dev-master"
~~~

or add

~~~
"cakebake/yii2-bootstrap-select": "dev-master"
~~~

to the require section of your ```composer.json``` file and run ```php composer.phar update```.

### Usage

Add this in your view (If you like it global use "views/layouts/main.php"):

```php
use cakebake\bootstrap\select\BootstrapSelectAsset;
BootstrapSelectAsset::register($this);
```

Create your `<select>` with the `.selectpicker` class.

    <select class="selectpicker">
      <option>Mustard</option>
      <option>Ketchup</option>
      <option>Barbecue</option>
    </select>
    
Enable Bootstrap-Select via JavaScript:

    $('.selectpicker').selectpicker();

Or just

    $('select').selectpicker();

Checkout the [documentation](http://silviomoreto.github.io/bootstrap-select/3/) for further information.
