<?php
/**
 * Google Analytics tracking widget for Yii2 applications
 *
 * @link      https://github.com/hiqdev/yii2-google-analytics
 * @package   yii2-google-analytics
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2017, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\yii2\GoogleAnalytics\tests;

use hiqdev\yii2\GoogleAnalytics\CodeBuilder;
use Yii;

class CodeBuilderTest extends \PHPUnit\Framework\TestCase
{
    protected $builder;

    protected $id = 'UA-1234567890-1';

    protected $params = [
    ];

    protected function setUp()
    {
        $this->builder = Yii::createObject([
            'class' => CodeBuilder::class,
            'id' => $this->id,
            'params' => $this->params,
        ]);
    }

    public function testRender()
    {
        $sample = file_get_contents(__DIR__ . '/code.html');
        $this->assertSame(trim($sample), trim($this->builder->render()));
    }
}
