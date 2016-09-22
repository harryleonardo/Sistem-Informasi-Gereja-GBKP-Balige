<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PersPjjSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pers-pjj-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_pjj') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'jumlah_hadir') ?>

    <?= $form->field($model, 'sektor') ?>

    <?= $form->field($model, 'total') ?>

    <?php // echo $form->field($model, 'tempat_pjj') ?>

    <?php // echo $form->field($model, 'pjj_selanjutnya') ?>

    <?php // echo $form->field($model, 'id_kegiatan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
