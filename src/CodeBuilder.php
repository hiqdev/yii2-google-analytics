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

class CodeBuilder extends \yii\base\Object
{
    public $id;

    public $params = [];

    public function getView()
    {
        return Yii::$app->getView();
    }

    public function render()
    {
        return $this->getView()->render('@hiqdev/yii2/GoogleAnalytics/views/code.php', $this->prepareData());
    }

    public function prepareData()
    {
        return [
            'id' => $this->id,
            'params' => $this->prepareParams(),
        ];
    }

    public function prepareParams()
    {
        return array_filter(array_merge($this->params, [
            'id' => $this->id,
        ]));
    }
}
