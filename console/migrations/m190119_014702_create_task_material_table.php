<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%task_material}}`.
 */
class m190119_014702_create_task_material_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%task_material}}', [
            'id' => $this->primaryKey(),
            'task_id' => $this->integer(),
            'material_id' => $this->integer(),
            'qty' => $this->float(),
            'created_at' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%task_material}}');
    }
}
