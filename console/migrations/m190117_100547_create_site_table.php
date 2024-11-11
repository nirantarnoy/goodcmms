<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%section}}`.
 */
class m190117_100547_create_site_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%site}}', [
            'id' => $this->primaryKey(),
            'engname' => $this->string(),
            'name' => $this->string(),
            'description' => $this->string(),
            'logo' => $this->string(),
            'taxid' => $this->string(),
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
        $this->dropTable('{{%section}}');
    }
}
