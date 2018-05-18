<?php

use yii\db\Migration;

/**
 * Class m180409_114917_AddRoles
 */
class m180409_114917_AddRoles extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $rbac = \Yii::$app->authManager;

        $guest = $rbac->createRole('guest');
        $guest->description = 'Посетитель';
        $rbac->add($guest);

        $student = $rbac->createRole('student');
        $student->description = 'Студент';
        $rbac->add($student);

        $manager = $rbac->createRole('manager');
        $manager->description = 'Управление курсами';
        $rbac->add($manager);

        $admin = $rbac->createRole('admin');
        $admin->description = 'Может всё';
        $rbac->add($admin);

        $rbac->addChild($admin, $manager);
        $rbac->addChild($manager, $student);
        $rbac->addChild($student, $guest);

        $rbac->assign(
            $admin,
            \app\models\User::findOne([
                'username' => 'php'])->id
        );

    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $manager = \Yii::$app->authManager;
        $manager->removeAll();
    }
}
