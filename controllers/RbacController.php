<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;

class RbacController extends Controller
{
    public function actionInit()
    {
        $auth = Yii::$app->authManager;

        $auth->removeAll(); // на всякий случай удаляем старые данные

        // добавляем роли
        $admin = $auth->createRole('admin');
        $auth->add($admin);

        $admission = $auth->createRole('admission');
        $auth->add($admission);

        $student = $auth->createRole('student');
        $auth->add($student);

        // для примера свяжем роль "admin" с пользователем с ID 1
        $auth->assign($admin, 1);

        Yii::$app->response->content = "Roles are initialized.";
    }
}
