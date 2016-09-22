<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\PersPersonal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pers-personal-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_personal')->textInput() ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenis_pers')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlah')->textInput() ?>

    <?= $form->field($model, 'pos')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_kegiatan')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
