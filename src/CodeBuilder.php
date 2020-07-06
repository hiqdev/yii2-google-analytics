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

/**
 * Class CodeBuilder
 *
 * @author Dmytro Naumenko <d.naumenko.a@gmail.com>
 */
class CodeBuilder extends \yii\base\BaseObject
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var array
     */
    public $params = [];

    public function getView()
    {
        return Yii::$app->getView();
    }

    public function render()
    {
        if ($this->id === null) {
            return '';
        }

        return $this->getView()->render(__DIR__ . '/views/code.php', $this->prepareData());
    }

    private function prepareData(): array
    {
        return [
            'id' => $this->id,
            'params' => $this->prepareParams(),
        ];
    }

    private function prepareParams(): array
    {
        return array_filter(array_merge($this->params, [
            'id' => $this->id,
        ]));
    }
}
