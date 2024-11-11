<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%asset}}`.
 */
class m241111_091659_add_asset_recieve_date_column_to_asset_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%asset}}', 'asset_recieve_date', $this->datetime());
        $this->addColumn('{{%asset}}', 'warranty_month_qty', $this->integer());
        $this->addColumn('{{%asset}}', 'warranty_year_qty', $this->integer());
        $this->addColumn('{{%asset}}', 'exp_warranty_date', $this->datetime());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%asset}}', 'asset_recieve_date');
        $this->dropColumn('{{%asset}}', 'warranty_month_qty');
        $this->dropColumn('{{%asset}}', 'warranty_year_qty');
        $this->dropColumn('{{%asset}}', 'exp_warranty_date');
    }
}
