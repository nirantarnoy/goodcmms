<?php

use yii\db\Migration;

/**
 * Class m190119_012825_add_column_to_workrequest_table
 */
class m190119_012825_add_column_to_workrequest_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190119_012825_add_column_to_workrequest_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190119_012825_add_column_to_workrequest_table cannot be reverted.\n";

        return false;
    }
    */
}