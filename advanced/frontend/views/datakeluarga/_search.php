<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\DatakeluargaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="datakeluarga-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_datakeluarga') ?>

    <?= $form->field($model, 'nama_istri') ?>

    <?= $form->field($model, 'tanggal_pernikahan') ?>

    <?= $form->field($model, 'tempat_menikah') ?>

    <?= $form->field($model, 'nama_pendeta') ?>

    <?php // echo $form->field($model, 'no_registrasi') ?>

    <?php // echo $form->field($model, 'status_dalam_keluarga') ?>

    <?php // echo $form->field($model, 'nama_ayah') ?>

    <?php // echo $form->field($model, 'nama_ibu') ?>

    <?php // echo $form->field($model, 'jumlah_anak') ?>

    <?php // echo $form->field($model, 'id_datadiri') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
