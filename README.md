# opencart-html-helper
Opencart Html Helper provides a set of static methods for generating commonly used HTML tags.
###
This module from Yii2 Framework is adapted by [Mefistophell Nill](https://github.com/Mefistophell) and [Zoturn](https://github.com/Zoturn) (**8sun Empire**) for OpenCart.

>This module includes another module from Yii2, which we adapted and you can use it separately. The link to the module is shown below.

>[ArrayHelper](https://github.com/8sun/opencart-array-helper) - provides additional array functionality that you can use in your application.

Tested on Opencart 2.0. If you find an error, let us know.

Version: 0.9.1

## Install
1. You need to copy the files to the directory `/system/helper/`.

2. Further, add the Helpers to `/system/startup.php` as shown below:

```
require_once(DIR_SYSTEM . 'helper/Html.php');
require_once(DIR_SYSTEM . 'helper/ArrayHelper.php');
require_once(DIR_SYSTEM . 'helper/BaseJson.php');
require_once(DIR_SYSTEM . 'helper/InvalidParamException.php');
```

## Usage
Just use the Helpers in your template files. You can get something like this:

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

Here is a list of available features

<table>
    <colgroup>
    <col class="col-method"/>
    <col class="col-description"/>
</colgroup>
<tbody><tr>
  <th>Method</th><th>Description</th>
</tr>
<tr id="a()">
    <td><a href="http://www.yiiframework.com/doc-2.0/yii-helpers-basehtml.html#a()-detail">a()</a></td>
    <td>Generates a hyperlink tag.</td>
</tr>
<tr id="addCssClass()">
    <td><a href="http://www.yiiframework.com/doc-2.0/yii-helpers-basehtml.html#addCssClass()-detail">addCssClass()</a></td>
    <td>Adds a CSS class (or several classes) to the specified options.</td>
</tr>
<tr id="addCssStyle()">
    <td><a href="http://www.yiiframework.com/doc-2.0/yii-helpers-basehtml.html#addCssStyle()-detail">addCssStyle()</a></td>
    <td>Adds the specified CSS style to the HTML options.</td>
</tr>
<tr id="beginForm()">
    <td><a href="http://www.yiiframework.com/doc-2.0/yii-helpers-basehtml.html#beginForm()-detail">beginForm()</a></td>
    <td>Generates a form start tag.</td>
</tr>
<tr id="beginTag()">
    <td><a href="http://www.yiiframework.com/doc-2.0/yii-helpers-basehtml.html#beginTag()-detail">beginTag()</a></td>
    <td>Generates a start tag.</td>
</tr>
<tr id="button()">
    <td><a href="http://www.yiiframework.com/doc-2.0/yii-helpers-basehtml.html#button()-detail">button()</a></td>
    <td>Generates a button tag.</td>
</tr>
<tr id="buttonInput()">
    <td><a href="http://www.yiiframework.com/doc-2.0/yii-helpers-basehtml.html#buttonInput()-detail">buttonInput()</a></td>
    <td>Generates an input button.</td>
</tr>
<tr id="checkbox()">
    <td><a href="http://www.yiiframework.com/doc-2.0/yii-helpers-basehtml.html#checkbox()-detail">checkbox()</a></td>
    <td>Generates a checkbox input.</td>
</tr>
<tr id="checkboxList()">
    <td><a href="http://www.yiiframework.com/doc-2.0/yii-helpers-basehtml.html#checkboxList()-detail">checkboxList()</a></td>
    <td>Generates a list of checkboxes.</td>
</tr>
<tr id="cssFile()">
    <td><a href="http://www.yiiframework.com/doc-2.0/yii-helpers-basehtml.html#cssFile()-detail">cssFile()</a></td>
    <td>Generates a link tag that refers to an external CSS file.</td>
</tr>
<tr id="cssStyleFromArray()">
    <td><a href="http://www.yiiframework.com/doc-2.0/yii-helpers-basehtml.html#cssStyleFromArray()-detail">cssStyleFromArray()</a></td>
    <td>Converts a CSS style array into a string representation.</td>
</tr>
<tr id="cssStyleToArray()">
    <td><a href="http://www.yiiframework.com/doc-2.0/yii-helpers-basehtml.html#cssStyleToArray()-detail">cssStyleToArray()</a></td>
    <td>Converts a CSS style string into an array representation.</td>
</tr>
<tr id="decode()">
    <td><a href="http://www.yiiframework.com/doc-2.0/yii-helpers-basehtml.html#decode()-detail">decode()</a></td>
    <td>Decodes special HTML entities back to the corresponding characters.</td>
</tr>
<tr id="dropDownList()">
    <td><a href="http://www.yiiframework.com/doc-2.0/yii-helpers-basehtml.html#dropDownList()-detail">dropDownList()</a></td>
    <td>Generates a drop-down list.</td>
</tr>
<tr id="encode()">
    <td><a href="http://www.yiiframework.com/doc-2.0/yii-helpers-basehtml.html#encode()-detail">encode()</a></td>
    <td>Encodes special characters into HTML entities.</td>
</tr>
<tr id="endForm()">
    <td><a href="http://www.yiiframework.com/doc-2.0/yii-helpers-basehtml.html#endForm()-detail">endForm()</a></td>
    <td>Generates a form end tag.</td>
</tr>
<tr id="endTag()">
    <td><a href="http://www.yiiframework.com/doc-2.0/yii-helpers-basehtml.html#endTag()-detail">endTag()</a></td>
    <td>Generates an end tag.</td>
</tr>
<tr id="escapeJsRegularExpression()">
    <td><a href="http://www.yiiframework.com/doc-2.0/yii-helpers-basehtml.html#escapeJsRegularExpression()-detail">escapeJsRegularExpression()</a></td>
    <td>Escapes regular expression to use in JavaScript</td>
</tr>
<tr id="fileInput()">
    <td><a href="http://www.yiiframework.com/doc-2.0/yii-helpers-basehtml.html#fileInput()-detail">fileInput()</a></td>
    <td>Generates a file input field.</td>
</tr>
<tr id="getAttributeName()">
    <td><a href="http://www.yiiframework.com/doc-2.0/yii-helpers-basehtml.html#getAttributeName()-detail">getAttributeName()</a></td>
    <td>Returns the real attribute name from the given attribute expression.</td>
</tr>
<tr id="hiddenInput()">
    <td><a href="http://www.yiiframework.com/doc-2.0/yii-helpers-basehtml.html#hiddenInput()-detail">hiddenInput()</a></td>
    <td>Generates a hidden input field.</td>
</tr>
<tr id="img()">
    <td><a href="http://www.yiiframework.com/doc-2.0/yii-helpers-basehtml.html#img()-detail">img()</a></td>
    <td>Generates an image tag.</td>
</tr>
<tr id="input()">
    <td><a href="http://www.yiiframework.com/doc-2.0/yii-helpers-basehtml.html#input()-detail">input()</a></td>
    <td>Generates an input type of the given type.</td>
</tr>
<tr id="jsFile()">
    <td><a href="http://www.yiiframework.com/doc-2.0/yii-helpers-basehtml.html#jsFile()-detail">jsFile()</a></td>
    <td>Generates a script tag that refers to an external JavaScript file.</td>
</tr>
<tr id="label()">
    <td><a href="http://www.yiiframework.com/doc-2.0/yii-helpers-basehtml.html#label()-detail">label()</a></td>
    <td>Generates a label tag.</td>
</tr>
<tr id="listBox()">
    <td><a href="http://www.yiiframework.com/doc-2.0/yii-helpers-basehtml.html#listBox()-detail">listBox()</a></td>
    <td>Generates a list box.</td>
</tr>
<tr id="mailto()">
    <td><a href="http://www.yiiframework.com/doc-2.0/yii-helpers-basehtml.html#mailto()-detail">mailto()</a></td>
    <td>Generates a mailto hyperlink.</td>
</tr>
<tr id="ol()">
    <td><a href="http://www.yiiframework.com/doc-2.0/yii-helpers-basehtml.html#ol()-detail">ol()</a></td>
    <td>Generates an ordered list.</td>
</tr>
<tr id="passwordInput()">
    <td><a href="http://www.yiiframework.com/doc-2.0/yii-helpers-basehtml.html#passwordInput()-detail">passwordInput()</a></td>
    <td>Generates a password input field.</td>
</tr>
<tr id="radio()">
    <td><a href="http://www.yiiframework.com/doc-2.0/yii-helpers-basehtml.html#radio()-detail">radio()</a></td>
    <td>Generates a radio button input.</td>
</tr>
<tr id="radioList()">
    <td><a href="http://www.yiiframework.com/doc-2.0/yii-helpers-basehtml.html#radioList()-detail">radioList()</a></td>
    <td>Generates a list of radio buttons.</td>
</tr>
<tr id="removeCssClass()">
    <td><a href="http://www.yiiframework.com/doc-2.0/yii-helpers-basehtml.html#removeCssClass()-detail">removeCssClass()</a></td>
    <td>Removes a CSS class from the specified options.</td>
</tr>
<tr id="removeCssStyle()">
    <td><a href="http://www.yiiframework.com/doc-2.0/yii-helpers-basehtml.html#removeCssStyle()-detail">removeCssStyle()</a></td>
    <td>Removes the specified CSS style from the HTML options.</td>
</tr>
<tr id="resetButton()">
    <td><a href="http://www.yiiframework.com/doc-2.0/yii-helpers-basehtml.html#resetButton()-detail">resetButton()</a></td>
    <td>Generates a reset button tag.</td>
</tr>
<tr id="resetInput()">
    <td><a href="http://www.yiiframework.com/doc-2.0/yii-helpers-basehtml.html#resetInput()-detail">resetInput()</a></td>
    <td>Generates a reset input button.</td>
</tr>
<tr id="script()">
    <td><a href="http://www.yiiframework.com/doc-2.0/yii-helpers-basehtml.html#script()-detail">script()</a></td>
    <td>Generates a script tag.</td>
</tr>
<tr id="style()">
    <td><a href="http://www.yiiframework.com/doc-2.0/yii-helpers-basehtml.html#style()-detail">style()</a></td>
    <td>Generates a style tag.</td>
</tr>
<tr id="submitButton()">
    <td><a href="http://www.yiiframework.com/doc-2.0/yii-helpers-basehtml.html#submitButton()-detail">submitButton()</a></td>
    <td>Generates a submit button tag.</td>
</tr>
<tr id="submitInput()">
    <td><a href="http://www.yiiframework.com/doc-2.0/yii-helpers-basehtml.html#submitInput()-detail">submitInput()</a></td>
    <td>Generates a submit input button.</td>
</tr>
<tr id="tag()">
    <td><a href="http://www.yiiframework.com/doc-2.0/yii-helpers-basehtml.html#tag()-detail">tag()</a></td>
    <td>Generates a complete HTML tag.</td>
</tr>
<tr id="textInput()">
    <td><a href="http://www.yiiframework.com/doc-2.0/yii-helpers-basehtml.html#textInput()-detail">textInput()</a></td>
    <td>Generates a text input field.</td>
</tr>
<tr id="textarea()">
    <td><a href="http://www.yiiframework.com/doc-2.0/yii-helpers-basehtml.html#textarea()-detail">textarea()</a></td>
    <td>Generates a text area input.</td>
</tr>
<tr id="ul()">
    <td><a href="http://www.yiiframework.com/doc-2.0/yii-helpers-basehtml.html#ul()-detail">ul()</a></td>
    <td>Generates an unordered list.</td>
</tr>
</tbody></table>

A full list of the features you can find on Yii2 reference: http://www.yiiframework.com/doc-2.0/yii-helpers-html.html

However, please note that given classes do not have all the features!
