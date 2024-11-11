<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%material}}`.
 */
class m190119_015946_create_material_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%material}}', [
            'id' => $this->primaryKey(),
            'code' => $this->string(),
            'name' => $this->string(),
            'standard_cost' => $this->float(),
            'leadtime' => $this->integer(),
            'min_stock' => $this->float(),
            'max_stock' => $this->float(),
            'min_order' => $this->float(),
            'max_order' => $this->float(),
            'default_warehouse' => $this->integer(),
            'allow_negative' => $this->integer(),
            'critical_type' => $this->integer(),
            'unit' => $this->integer(),
            'manufacturer' => $this->string(),
            'note' => $this->string(),
            'all_qty' => $this->integer(),
            'average_cose' => $this->float(),
            'type_id' => $this->integer(),
            'created_at' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%material}}');
    }
}
