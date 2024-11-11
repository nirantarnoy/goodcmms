<?php

use yii\db\Migration;

/**
 * Class m190119_092702_add_pm_no_column_to_pmschedule
 */
class m190119_092702_add_pm_no_column_to_pmschedule extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%pmschedule}}', 'pm_no', $this->integer()->after('id'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%pmschedule}}', 'pm_no');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190119_092702_add_pm_no_column_to_pmschedule cannot be reverted.\n";

        return false;
    }
    */
}
