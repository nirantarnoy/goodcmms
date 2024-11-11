<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%app_photo}}`.
 */
class m190513_060850_create_app_photo_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%app_photo}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'extension_name' => $this->string(),
            'type_id'=> $this->integer(),
            'ref_id' => $this->integer(),
            'module_type'=>$this->integer(),
            'is_primary' => $this->integer(),
            'status'=> $this->integer(),
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
        $this->dropTable('{{%app_photo}}');
    }
}
