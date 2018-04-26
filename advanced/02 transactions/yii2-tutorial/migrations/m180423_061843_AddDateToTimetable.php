<?php

use yii\db\Migration;

/**
 * Class m180423_061843_AddDateToTimetable
 */
class m180423_061843_AddDateToTimetable extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('timetable', 'start_day', $this->date());
    }

    /**
     * {@inheritdoc}
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
        echo "m180423_061843_AddDateToTimetable cannot be reverted.\n";

        return false;
    }
    */
}
