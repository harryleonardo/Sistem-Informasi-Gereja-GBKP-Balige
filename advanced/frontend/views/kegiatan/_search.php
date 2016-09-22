<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\KegiatanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kegiatan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_kegiatan') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'jumlah_hadir') ?>

    <?= $form->field($model, 'total') ?>

    <?= $form->field($model, 'jenis_kegiatan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
