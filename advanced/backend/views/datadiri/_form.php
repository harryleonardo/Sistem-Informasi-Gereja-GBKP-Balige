<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Datadiri */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="datadiri-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nomor_anggota')->textInput() ?>

    <?= $form->field($model, 'sektor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_lengkap')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tempat_lahir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_lahir')->textInput() ?>

    <?= $form->field($model, 'jenis_kelamin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat_jelas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'golDarah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pendidikan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bidang_Ilmu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'spesifikasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pekerjaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'aktivitasDiMasyarakat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_telp')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
