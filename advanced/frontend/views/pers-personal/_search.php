<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\PersPersonalSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pers-personal-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_personal') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'jenis_pers') ?>

    <?= $form->field($model, 'jumlah') ?>

    <?= $form->field($model, 'pos') ?>

    <?php // echo $form->field($model, 'id_kegiatan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
