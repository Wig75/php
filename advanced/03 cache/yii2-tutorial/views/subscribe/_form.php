<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SubscribeForm */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="subscribe-form">

    <?php $form = ActiveForm::begin([
            'action' => ['/subscribe'],
            'options' => [
                'method' => 'post',
                'enctype' => 'multipart/form-data',
            ]
        ]
    ); ?>

    <?= $form->field($model, 'message')->textInput() ?>
    <?= $form->field($model, 'file')->fileInput() ?>
    <?= $form->field($model, 'course_id')->hiddenInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
