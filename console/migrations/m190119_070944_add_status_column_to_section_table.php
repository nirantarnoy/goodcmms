<?php

use yii\db\Migration;

/**
 * Handles adding status to table `{{%section}}`.
 */
class m190119_070944_add_status_column_to_section_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%section}}', 'status', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%section}}', 'status');
    }
}
