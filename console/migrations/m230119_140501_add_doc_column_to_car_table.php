<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%car}}`.
 */
class m230119_140501_add_doc_column_to_car_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%car}}', 'doc', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%car}}', 'doc');
    }
}
