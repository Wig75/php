<?php

use yii\db\Migration;

/**
 * Class m170924_095846_AddBalanceToUser
 */
class m170924_095846_AddBalanceToUser extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->addColumn('user', 'balance', $this->integer()->notNull()->defaultValue(0));
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropColumn('user', 'balance');
    }
}
