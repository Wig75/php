<?php

use yii\db\Migration;

/**
 * Class m180425_092243_AddUserBalance
 */
class m180425_092243_AddUserBalance extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('user', 'balance', $this->integer()->notNull()->defaultValue(0));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
         $this->dropColumn('user', 'balance');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180425_092243_AddUserBalance cannot be reverted.\n";

        return false;
    }
    */
}
