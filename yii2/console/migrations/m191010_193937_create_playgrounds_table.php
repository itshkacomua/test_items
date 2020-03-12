<?php

use yii\base\NotSupportedException;
use yii\db\Migration;

/**
 * Handles the creation of table `{{%playgrounds}}`.
 */
class m191010_193937_create_playgrounds_table extends Migration
{
    /**
     * {@inheritdoc}
     * @throws NotSupportedException
     */
    public function safeUp()
    {
        $this->createTable('{{%playgrounds}}', [
            'id' => $this->getDb()->getSchema()->createColumnSchemaBuilder("uuid")->notNull(),
            'name' => $this->string()->notNull(),
            'picture' => $this->string(),
            'sorting' => $this->integer()->defaultValue(100),
            'description' => $this->text(),
        ]);

        $this->addPrimaryKey('pk_playgrounds_id', '{{%playgrounds}}','id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropPrimaryKey('pk_playgrounds_id', '{{%playgrounds}}');

        $this->dropTable('{{%playgrounds}}');
    }
}
