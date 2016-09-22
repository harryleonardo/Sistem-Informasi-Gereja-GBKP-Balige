<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\DatagerejaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="datagereja-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_datagereja') ?>

    <?= $form->field($model, 'asal_gereja') ?>

    <?= $form->field($model, 'aktivitas_diGereja') ?>

    <?= $form->field($model, 'status_keanggotaan') ?>

    <?= $form->field($model, 'id_datadiri') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
