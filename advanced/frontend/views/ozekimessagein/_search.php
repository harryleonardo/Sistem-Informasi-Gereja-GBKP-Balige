<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\OzekimessageinSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ozekimessagein-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'sender') ?>

    <?= $form->field($model, 'receiver') ?>

    <?= $form->field($model, 'msg') ?>

    <?= $form->field($model, 'senttime') ?>

    <?php // echo $form->field($model, 'receivedtime') ?>

    <?php // echo $form->field($model, 'operator') ?>

    <?php // echo $form->field($model, 'msgtype') ?>

    <?php // echo $form->field($model, 'reference') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
