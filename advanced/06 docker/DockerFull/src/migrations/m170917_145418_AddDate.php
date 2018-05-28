<?php

use yii\db\Migration;

/**
 * Class m170917_145418_AddDate
 */
class m170917_145418_AddDate extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->addColumn('timetable', 'start_day', $this->date());
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropColumn('timetable', 'start_day');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170917_145418_AddDate cannot be reverted.\n";

        return false;
    }
    */
}
