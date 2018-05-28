<?php

use yii\db\Migration;

/**
 * Class m170826_092219_AddFilenameToSubscription
 */
class m170826_092219_AddFilenameToSubscription extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->addColumn('subscribes', 'filename', $this->string());
    }

    /**
     * @inheritdoc
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
        echo "m170826_092219_AddFilenameToSubscription cannot be reverted.\n";

        return false;
    }
    */
}
