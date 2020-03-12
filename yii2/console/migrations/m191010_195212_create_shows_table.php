<?php

use yii\base\NotSupportedException;
use yii\db\Migration;

/**
 * Handles the creation of table `{{%shows}}`.
 */
class m191010_195212_create_shows_table extends Migration
{
    /**
     * {@inheritdoc}
     * @throws NotSupportedException
     */
    public function safeUp()
    {
        $this->createTable('{{%shows}}', [
            'id' => $this->getDb()->getSchema()->createColumnSchemaBuilder("uuid")->notNull(),
            'name' => $this->string()->notNull(),
            'picture' => $this->string(),
            'description' => $this->text(),
        ]);

        $this->addPrimaryKey('pk_shows_id', '{{%shows}}','id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropPrimaryKey('pk_shows_id', '{{%shows}}');

        $this->dropTable('{{%shows}}');
    }
}
