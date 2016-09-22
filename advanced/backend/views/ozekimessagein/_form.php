<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Ozekimessagein */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ozekimessagein-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'sender')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'receiver')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'msg')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'senttime')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'receivedtime')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'operator')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'msgtype')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'reference')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
