<?php

use yii\db\Migration;

class m170806_124416_AddAuthKeyToUser extends Migration
{
    public function safeUp()
    {
        $this->addColumn('{{%user}}', 'auth_key', $this->string(32));
    }

    public function safeDown()
    {
        $this->dropColumn('{{%user}}', 'auth_key');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170806_124416_AddAuthKeyToUser cannot be reverted.\n";

        return false;
    }
    */
}
