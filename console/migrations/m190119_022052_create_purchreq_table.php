<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%purchreq}}`.
 */
class m190119_022052_create_purchreq_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%purchreq}}', [
            'id' => $this->primaryKey(),
            'purchreq_no' => $this->string(),
            'purchreq_date' => $this->datetime(),
            'require_date' => $this->datetime(),
            'purchreq_reason' => $this->string(),
            'workorder_id' => $this->integer(),
            'workorder_list' => $this->string(),
            'priority' => $this->integer(),
            'totalamount' => $this->float(),
            'request_by' => $this->integer(),
            'approve_by' => $this->integer(),
            'approve_date' => $this->datetime(),
            'approve_desc' => $this->string(),
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
        $this->dropTable('{{%purchreq}}');
    }
}
