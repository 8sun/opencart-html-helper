<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

/**
 * InvalidParamException represents an exception caused by invalid parameters passed to a method.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * 
 * This module has been adapting by *Mefistophell Nill* (8sun Empire) especially for OpenCart
 * Original Yii2 class has name InvalidParamException
 * 
 * @version 0.1.1
 * 
 * WARNING: Not all methods are tested to date
 * If you find an error, let us know
 */
class InvalidParamException extends \BadMethodCallException
{
    /**
     * @return string the user-friendly name of this exception
     */
    public function getName()
    {
        return 'Invalid Parameter';
    }
}