<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%task_line}}`.
 */
class m190118_154007_create_task_line_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%task_line}}', [
            'id' => $this->primaryKey(),
            'seq' => $this->float(),
            'title' => $this->string(),
            'description' => $this->string(),
            'task_id' => $this->integer(),
            'acceptable_factor' => $this->float(),
            'status' => $this->integer(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%task_line}}');
    }
}
