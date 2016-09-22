<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\DataistriSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dataistri-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_istri') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'tanggal_lahir') ?>

    <?= $form->field($model, 'tanggal_baptis') ?>

    <?= $form->field($model, 'no_baptis') ?>

    <?php // echo $form->field($model, 'tanggal_sidi') ?>

    <?php // echo $form->field($model, 'no_registrasi') ?>

    <?php // echo $form->field($model, 'asal_gereja') ?>

    <?php // echo $form->field($model, 'id_keluarga') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
