<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\DatadiriSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="datadiri-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_datadiri') ?>

    <?= $form->field($model, 'nomor_anggota') ?>

    <?= $form->field($model, 'sektor') ?>

    <?= $form->field($model, 'nama_lengkap') ?>

    <?= $form->field($model, 'tempat_lahir') ?>

    <?php // echo $form->field($model, 'tanggal_lahir') ?>

    <?php // echo $form->field($model, 'jenis_kelamin') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'alamat_jelas') ?>

    <?php // echo $form->field($model, 'golDarah') ?>

    <?php // echo $form->field($model, 'pendidikan') ?>

    <?php // echo $form->field($model, 'bidang_Ilmu') ?>

    <?php // echo $form->field($model, 'spesifikasi') ?>

    <?php // echo $form->field($model, 'pekerjaan') ?>

    <?php // echo $form->field($model, 'aktivitasDiMasyarakat') ?>

    <?php // echo $form->field($model, 'no_telp') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
