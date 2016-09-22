<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Datagereja */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="datagereja-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'asal_gereja')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'aktivitas_diGereja')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status_keanggotaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_datadiri')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
