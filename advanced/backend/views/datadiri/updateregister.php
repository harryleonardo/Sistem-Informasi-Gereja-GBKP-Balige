<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Datadiri */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="datadiri-form">

    <?php $form = ActiveForm::begin(); ?>

    <!-- Update Data Diri -->
    <?= $form->field($model, 'nomor_anggota')->textInput() ?>

    <?= $form->field($model, 'sektor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_lengkap')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tempat_lahir_diri')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_lahir_diri')->textInput() ?>

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

    <!-- Update Data Gereja -->

    <?= $form->field($model, 'asal_gereja')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'aktivitas_diGereja')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status_keanggotaan')->textInput(['maxlength' => true]) ?>

    <!-- Update Data Baptis -->
    <?= $form->field($model, 'tanggal_baptis')->textInput() ?>

    <?= $form->field($model, 'tempat_baptis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_registrasi')->textInput() ?>

    <?= $form->field($model, 'dilayani_oleh')->textInput(['maxlength' => true]) ?>

    <!-- Update Data Sidi -->
    <?= $form->field($model, 'tanggal_sidi_diri')->textInput() ?>

    <?= $form->field($model, 'tempat_sidi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_registrasi')->textInput() ?>

    <?= $form->field($model, 'nama_pendeta')->textInput(['maxlength' => true]) ?>

    <!-- Update Data Keluarga -->
    <?= $form->field($model, 'nama_istri')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_pernikahan')->textInput() ?>

    <?= $form->field($model, 'tempat_menikah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_pendeta')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_registrasi')->textInput() ?>

    <?= $form->field($model, 'status_dalam_keluarga')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_ayah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_ibu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlah_anak')->textInput() ?>

    <!-- Update Data Istri -->
    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_lahir_anak')->textInput() ?>

    <?= $form->field($model, 'tanggal_baptis_anak')->textInput() ?>

    <?= $form->field($model, 'no_baptis_istri')->textInput() ?>

    <?= $form->field($model, 'tanggal_sidi_istri')->textInput() ?>

    <?= $form->field($model, 'no_registrasi')->textInput() ?>

    <?= $form->field($model, 'asal_gereja')->textInput(['maxlength' => true]) ?>

    <!-- Update Data Baptis -->
    <?= $form->field($model, 'tanggal_baptis')->textInput() ?>

    <?= $form->field($model, 'tempat_baptis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_registrasi')->textInput() ?>

    <?= $form->field($model, 'dilayani_oleh')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
