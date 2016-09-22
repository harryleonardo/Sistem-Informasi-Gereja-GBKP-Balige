<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\JadwalIbadahSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jadwal-ibadah-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_jadwal') ?>

    <?= $form->field($model, 'hari_tanggal') ?>

    <?= $form->field($model, 'jenis_minggu') ?>

    <?= $form->field($model, 'Bahasa') ?>

    <?= $form->field($model, 'ket') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
