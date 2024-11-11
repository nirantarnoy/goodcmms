<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%task_safety}}`.
 */
class m190119_013946_create_task_safety_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%task_safety}}', [
            'id' => $this->primaryKey(),
            'task_id' => $this->integer(),
            'safety_id' => $this->integer(),
            'title' => $this->string(),
            'filename' => $this->string(),
            'file_ext' => $this->string(),
            'created_at' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%task_safety}}');
    }
}
