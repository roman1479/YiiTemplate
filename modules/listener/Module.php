<?php

namespace app\modules\listener;

use yii\filters\AccessControl;

/**
 * admin module definition class
 */
class Module extends \yii\base\Module
{

    public $controllerNamespace = 'app\modules\listener\controllers';

    public function init()
    {
        parent::init();
    }
}
