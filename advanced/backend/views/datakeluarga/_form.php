<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Datakeluarga */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="datakeluarga-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_datakeluarga')->textInput() ?>

    <?= $form->field($model, 'nama_istri')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_pernikahan')->textInput() ?>

    <?= $form->field($model, 'tempat_menikah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_pendeta')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_registrasi')->textInput() ?>

    <?= $form->field($model, 'status_dalam_keluarga')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_ayah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_ibu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlah_anak')->textInput() ?>

    <?= $form->field($model, 'id_datadiri')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
