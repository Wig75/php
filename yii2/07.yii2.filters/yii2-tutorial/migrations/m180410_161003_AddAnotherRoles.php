<?php

use yii\db\Migration;

/**
 * Class m180410_161003_AddAnotherRoles
 */
class m180410_161003_AddAnotherRoles extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $rbac = \Yii::$app->authManager;

        $admin = $rbac->getRole('admin');
        $rbac->assign(
            $admin,
            \app\models\User::findOne([
                'username' => 'admin'])->id
        );

        $admin = $rbac->getRole('manager');
        $rbac->assign(
            $admin,
            \app\models\User::findOne([
                'username' => 'manager'])->id
        );

        $admin = $rbac->getRole('student');
        $rbac->assign(
            $admin,
            \app\models\User::findOne([
                'username' => 'student'])->id
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180410_161003_AddAnotherRoles cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180410_161003_AddAnotherRoles cannot be reverted.\n";

        return false;
    }
    */
}
