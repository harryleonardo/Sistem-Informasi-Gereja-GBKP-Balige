<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PersMingguanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pers-mingguan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_mingguan') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'jumlah_lk') ?>

    <?= $form->field($model, 'jumlah_pr') ?>

    <?= $form->field($model, 'pers1') ?>

    <?php // echo $form->field($model, 'pers2') ?>

    <?php // echo $form->field($model, 'pers3') ?>

    <?php // echo $form->field($model, 'total') ?>

    <?php // echo $form->field($model, 'pers_kakr') ?>

    <?php // echo $form->field($model, 'ket') ?>

    <?php // echo $form->field($model, 'id_kegiatan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
