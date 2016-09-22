<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\DatasidiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="datasidi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_datasidi') ?>

    <?= $form->field($model, 'id_datagereja') ?>

    <?= $form->field($model, 'tanggal_sidi') ?>

    <?= $form->field($model, 'tempat_sidi') ?>

    <?= $form->field($model, 'no_registrasi') ?>

    <?php // echo $form->field($model, 'nama_pendeta') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
