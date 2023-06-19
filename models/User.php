<?php

namespace app\models;

use yii\db\ActiveRecord;
use Yii;

class User extends ActiveRecord implements \yii\web\IdentityInterface
{

    public $role;

    public static function tableName()
    {
        return '{{%user}}';
    }

    public static function findIdentity($id)
    {
        $user = static::findOne($id);
        if ($user) {
            $authAssignment = \app\models\AuthAssignment::findOne(['user_id' => $id]);
            if ($authAssignment) {
                $user->role = $authAssignment->item_name;
            }
        }
        return $user;
    }

    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username]);
    }

    public function getId()
    {
        return $this->getPrimaryKey();
    }

    public function getAuthKey()
    {
        return $this->auth_key;
    }

    public function validateAuthKey($authKey)
    {
        return $this->auth_key === $authKey;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password_hash);
    }
    public static function findIdentityByAccessToken($token, $type = null)
    {
        // Пустая реализация, так как этот метод не используется
        throw new \yii\base\NotSupportedException();
    }
}
