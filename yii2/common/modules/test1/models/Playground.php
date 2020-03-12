<?php
namespace common\modules\test1\models;

use yii\db\ActiveRecord;

class Playground extends ActiveRecord
{
    public static function tableName()
    {
        return 'playgrounds';
    }
}
