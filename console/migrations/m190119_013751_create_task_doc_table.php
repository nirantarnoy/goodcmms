<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%task_doc}}`.
 */
class m190119_013751_create_task_doc_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%task_doc}}', [
            'id' => $this->primaryKey(),
            'task_id' => $this->integer(),
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
        $this->dropTable('{{%task_doc}}');
    }
}
