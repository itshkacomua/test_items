<?php
namespace common\modules\test1\models;

use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

class Event extends ActiveRecord
{
    public static function tableName()
    {
        return 'events';
    }

    /**
     * @return ActiveQuery
     */
    public function getShow()
    {
        return $this->hasOne(Show::class, ['id' => 'shows_id']);
    }

    /**
     * @return ActiveQuery
     */
    public function getPlayground()
    {
        return $this->hasOne(Playground::class, ['id' => 'playgrounds_id']);
    }
}
