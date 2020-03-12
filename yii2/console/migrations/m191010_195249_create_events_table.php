<?php

use yii\base\NotSupportedException;
use yii\db\Migration;

/**
 * Handles the creation of table `{{%events}}`.
 */
class m191010_195249_create_events_table extends Migration
{
    /**
     * {@inheritdoc}
     * @throws NotSupportedException
     */
    public function safeUp()
    {
        $this->createTable('{{%events}}', [
            'id' => $this->getDb()->getSchema()->createColumnSchemaBuilder("uuid")->notNull(),
            'date' => $this->dateTime(),
            'shows_id' => $this->getDb()->getSchema()->createColumnSchemaBuilder("uuid")->notNull(),
            'playgrounds_id' => $this->getDb()->getSchema()->createColumnSchemaBuilder("uuid")->notNull(),
        ]);

        $this->addPrimaryKey('pk_events_id', '{{%events}}','id');
        $this->addForeignKey('fk_shows_events', '{{%events}}', 'shows_id', '{{%shows}}', 'id');
        $this->addForeignKey('fk_playgrounds_events', '{{%events}}', 'playgrounds_id', '{{%playgrounds}}', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_playgrounds_events', '{{%events}}');
        $this->dropForeignKey('fk_shows_events', '{{%events}}');
        $this->dropPrimaryKey('pk_events_id', '{{%events}}');

        $this->dropTable('{{%events}}');
    }
}
