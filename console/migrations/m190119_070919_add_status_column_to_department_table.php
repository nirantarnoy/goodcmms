<?php

use yii\db\Migration;

/**
 * Handles adding status to table `{{%department}}`.
 */
class m190119_070919_add_status_column_to_department_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%department}}', 'status', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%department}}', 'status');
    }
}
