<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%pmshedule}}`.
 */
class m190119_024920_create_pmschedule_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%pmschedule}}', [
            'id' => $this->primaryKey(),
            'asset_id' => $this->integer(),
            'pm_type'=>$this->integer(),
            'pm_for' => $this->integer(),
            'worktrade_id' => $this->integer(),
            'worktype_id' => $this->integer(),
            'suplier_id' => $this->integer(),
            'pm_location_id' => $this->integer(),
            'pm_section_id' => $this->integer(),
            'pm_department_id' => $this->integer(),
            'generate_type' => $this->integer(),
            'task_id' => $this->integer(),
            'frequency_unit' => $this->integer(),
            'frequency' => $this->integer(),
            'days' => $this->integer(),
            'period_day' => $this->integer(),
            'target_start' => $this->integer(),
            'target_end' => $this->integer(),
            'next_target_start' => $this->integer(),
            'status' => $this->integer(),
            'note' => $this->string(),
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
        $this->dropTable('{{%pmshedule}}');
    }
}
