<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Jadwalibadah */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jadwalibadah-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_jadwal')->textInput() ?>

    <?= $form->field($model, 'hari_tanggal')->textInput() ?>

    <?= $form->field($model, 'jenis_minggu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Bahasa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ket')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
