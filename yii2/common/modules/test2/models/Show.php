<?php
namespace common\modules\test1\models;

use yii\db\ActiveRecord;

class Show extends ActiveRecord
{
    public static function tableName()
    {
        return 'shows';
    }
}
