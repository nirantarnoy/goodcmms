<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%workrequest}}`.
 */
class m190118_163356_create_workrequest_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%workrequest}}', [
            'id' => $this->primaryKey(),
            'workreq_no' => $this->string(),
            'workreq_date' => $this->datetime(),
            'work_type' => $this->integer(),
            'priority' => $this->integer(),
            'problem_desc' => $this->string(),
            'note' => $this->string(),
            'site_id' => $this->integer(),
            'department_id' => $this->integer(),
            'section_id' => $this->integer(),
            'asset_location_id' => $this->integer(),
            'asset_id' => $this->integer(),
            'is_approve' => $this->integer(),
            'approve_by' => $this->integer(),
            'approve_date' => $this->datetime(),
            'approve_reason' => $this->string(),
            'workorder_id' => $this->integer(),
            'request_by' => $this->integer(),
            'review_by' => $this->integer(),
            'assign_user' => $this->integer(),
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
        $this->dropTable('{{%workrequest}}');
    }
}
