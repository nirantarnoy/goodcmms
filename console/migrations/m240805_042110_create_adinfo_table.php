<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%adinfo}}`.
 */
class m240805_042110_create_adinfo_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%adinfo}}', [
            'id' => $this->primaryKey(),
            'domain_name' => $this->string(),
            'host_ip' => $this->string(),
            'post' => $this->integer(),
            'basedn' => $this->string(),
            'username' => $this->string(),
            'password' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%adinfo}}');
    }
}
