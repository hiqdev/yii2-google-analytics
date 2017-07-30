<?php
/**
 * Google Analytics tracking widget for Yii2 applications
 *
 * @link      https://github.com/hiqdev/yii2-google-analytics
 * @package   yii2-google-analytics
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2017, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\yii2\GoogleAnalytics;

use Yii;
use yii\web\View;

class Behavior extends \yii\base\Behavior
{
    public $builder;

    public function events()
    {
        return [
            View::EVENT_END_BODY => 'onEndBody',
        ];
    }

    public function onEndBody($event)
    {
        echo $this->getBuilder()->render();
    }

    public function getBuilder()
    {
        if (!is_object($this->builder)) {
            $this->builder = Yii::createObject($this->builder);
        }

        return $this->builder;
    }
}
