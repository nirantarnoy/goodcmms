<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%purchreq_line}}`.
 */
class m190119_022541_create_purchreq_line_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%purchreq_line}}', [
            'id' => $this->primaryKey(),
            'purchreq_id' => $this->integer(),
            'itemid' => $this->integer(),
            'qty' => $this->float(),
            'price' => $this->float(),
            'lineamount' => $this->float(),
            'line_disc' => $this->float(),
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
        $this->dropTable('{{%purchreq_line}}');
    }
}
