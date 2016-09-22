<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\DataanakSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dataanak-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_anak') ?>

    <?= $form->field($model, 'nama_anak') ?>

    <?= $form->field($model, 'tempat_lahir') ?>

    <?= $form->field($model, 'tanggal_lahir') ?>

    <?= $form->field($model, 'tanggal_baptis') ?>

    <?php // echo $form->field($model, 'id_keluarga') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
