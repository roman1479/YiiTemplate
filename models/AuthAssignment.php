<?php

namespace app\models;

use yii\db\ActiveRecord;

class AuthAssignment extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%auth_assignment}}';
    }
}
