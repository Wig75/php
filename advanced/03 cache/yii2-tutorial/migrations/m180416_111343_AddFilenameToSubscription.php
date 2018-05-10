<?php

use yii\db\Migration;

/**
 * Class m180416_111343_AddFilenameToSubscription
 */
class m180416_111343_AddFilenameToSubscription extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('subscribes', 'filename', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('subscribes', 'filename');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180416_111343_AddFilenameToSubscription cannot be reverted.\n";

        return false;
    }
    */
}
