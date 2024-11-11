<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%employee}}`.
 */
class m190119_024431_create_employee_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%employee}}', [
            'id' => $this->primaryKey(),
            'emp_code' => $this->string(),
            'prefix' => $this->integer(),
            'first_name' => $this->string(),
            'last_name' => $this->string(),
            'nickname' => $this->string(),
            'phone' => $this->string(),
            'email'=> $this->string(),
            'note' => $this->string(),
            'site_id' => $this->integer(),
            'department_id' => $this->integer(),
            'section_id' => $this->integer(),
            'position_id' => $this->integer(),
            'user_relation' => $this->integer(),
            'photo_profile' => $this->string(),
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
        $this->dropTable('{{%employee}}');
    }
}
