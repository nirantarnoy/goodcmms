<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%task_assign}}`.
 */
class m190119_014417_create_task_assign_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%task_assign}}', [
            'id' => $this->primaryKey(),
            'task_id' => $this->integer(),
            'assign_type' => $this->integer(),
            'suplier_id' => $this->integer(),
            'emp_id' => $this->integer(),
            'estimatesd_labor' => $this->float(),
            'created_at' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%task_assign}}');
    }
}
