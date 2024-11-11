<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%asset}}`.
 */
class m190119_114256_create_asset_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%asset}}', [
            'id' => $this->primaryKey(),
            'asset_no' => $this->string(),
            'asset_name' => $this->string(),
            'description' => $this->string(),
            'asset_group_id' => $this->integer(),
            'site_id' => $this->integer(),
            'department_id' => $this->integer(),
            'section_id' => $this->integer(),
            'asset_location_id' => $this->integer(),
            'critical' => $this->integer(),
            'manufacturer' => $this->string(),
            'brand' => $this->string(),
            'asset_model' => $this->string(),
            'asset_cat_id' => $this->integer(),
            'asset_status' => $this->integer(),
            'responsible' => $this->integer(),
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
        $this->dropTable('{{%asset}}');
    }
}
