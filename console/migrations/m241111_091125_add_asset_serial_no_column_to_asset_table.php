<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%asset}}`.
 */
class m241111_091125_add_asset_serial_no_column_to_asset_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%asset}}', 'asset_serial_no', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%asset}}', 'asset_serial_no');
    }
}
