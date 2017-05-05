# opencart-html-helpers
Opencart Html Helpers provides a set of static methods for generating commonly used HTML tags.
###
This module has been adapting by *Mefistophell Nill* (**8sun Empire**) especially for OpenCart.

>WARNING: Not all methods are tested to date!

Tested on Opencart 2.0. If you find an error, let us know.

## Install
1. You need copy the files to `/system/helper/` directory.

2. Further add Helpers to `/system/startup.php` how shown below:

```
require_once(DIR_SYSTEM . 'helper/Html.php');
require_once(DIR_SYSTEM . 'helper/ArrayHelper.php');
require_once(DIR_SYSTEM . 'helper/BaseJson.php');
require_once(DIR_SYSTEM . 'helper/InvalidParamException.php');
```

## Usage
Just using Helpers into your template files. You may get something following:

```
...
<td>
  <?php echo Html::input("text", $attribute, $value, ["class" => "form-control", "placeholder" => "comment"]) ?>
</td>
<td>
  <?php echo Html::dropDownList($name, $value, $selected, ["class" => "form-control"]); ?>
</td>
<td>
  <?php echo Html::button(
    Html::tag("i", "", ["class" => "fa fa-minus-circle"]), 
    ["class" => "btn btn-danger", "title" => "Delete"]) ?>
</td>
...
```

The full list features you may looking on Yii2 reference: http://www.yiiframework.com/doc-2.0/yii-helpers-html.html

However, please note that given classes do not have all the features!
