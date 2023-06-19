<?php

namespace app\modules\employee;

use yii\filters\AccessControl;

/**
 * admin module definition class
 */
class Module extends \yii\base\Module
{

    public $controllerNamespace = 'app\modules\employee\controllers';

    public function init()
    {
        parent::init();
    }
}
