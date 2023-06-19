<?php

namespace app\models;

use yii\db\ActiveRecord;

class ApplicationRecord extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%application}}';
    }
}
