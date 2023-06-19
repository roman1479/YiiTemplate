<?php

namespace app\modules\listener\controllers;

use Yii;
use yii\web\Controller;

class DefaultController extends Controller
{

    protected function checkUserRole($role)
    {
        if (Yii::$app->user->isGuest || Yii::$app->user->identity->role !== $role) {
            throw new \yii\web\ForbiddenHttpException();
        }
    }

    public function actionIndex()
    {

        $this->checkUserRole('listener');
        return $this->render('index', ['user' => Yii::$app->user->identity]);

    }

}
