<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%workorder}}`.
 */
class m190119_094619_create_workorder_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%workorder}}', [
            'id' => $this->primaryKey(),
            'workorder_no' => $this->string(),
            'workorder_date' => $this->datetime(),
            'work_type' => $this->integer(),
            'worktrade_id' => $this->integer(),
            'suplier_id' => $this->integer(),
            'require_date' => $this->datetime(),
            'workreq_id' => $this->integer(),
            'asset_id' => $this->integer(),
            'problem_desc' => $this->string(),
            'estimate_start' => $this->datetime(),
            'estimate_end' => $this->datetime(),
            'actual_start' => $this->datetime(),
            'actual_end' => $this->datetime(),
            'handover_date' => $this->datetime(),
            'downtime' => $this->float(),
            'cost' => $this->float(),
            'failure' => $this->integer(),
            'next_target_pm' => $this->integer(),
            'critical' => $this->integer(),
            'problem_action' => $this->string(),
            'note' => $this->string(),
            'pm_ref'=> $this->integer(),
            'emp_admin' => $this->integer(),
            'workorder_status'=>$this->integer(),
            'approve_by' => $this->integer(),
            'approve_date' => $this->datetime(),
            'approve_reason' => $this->string(),
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
        $this->dropTable('{{%workorder}}');
    }
}
