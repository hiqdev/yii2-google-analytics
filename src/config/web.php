<?php
/**
 * Google Analytics tracking widget for Yii2 applications
 *
 * @link      https://github.com/hiqdev/yii2-google-analytics
 * @package   yii2-google-analytics
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2017, HiQDev (http://hiqdev.com/)
 */

if (empty($params['googleAnalytics.id'])) {
    return [];
}

return [
    'components' => [
        'view' => [
            'as GoogleAnalytics' => [
                'class' => \hiqdev\yii2\GoogleAnalytics\Behavior::class,
                'builder' => [
                    'class' => \hiqdev\yii2\GoogleAnalytics\CodeBuilder::class,
                    'id' => $params['googleAnalytics.id'],
                    'params' => $params['googleAnalytics.params'],
                ],
            ],
        ],
    ],
];
