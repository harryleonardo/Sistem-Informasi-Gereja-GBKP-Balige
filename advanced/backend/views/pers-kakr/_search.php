<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PersKakrSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pers-kakr-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_kakr') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'anak_kecil') ?>

    <?= $form->field($model, 'jumlah_hadirAK') ?>

    <?= $form->field($model, 'anak_tanggung') ?>

    <?php // echo $form->field($model, 'jumlah_hadirAT') ?>

    <?php // echo $form->field($model, 'anak_remaja') ?>

    <?php // echo $form->field($model, 'jumlah_hadirR') ?>

    <?php // echo $form->field($model, 'ket') ?>

    <?php // echo $form->field($model, 'id_mingguan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
