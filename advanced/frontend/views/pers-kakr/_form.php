<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\PersKakr */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pers-kakr-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_kakr')->textInput() ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'anak_kecil')->textInput() ?>

    <?= $form->field($model, 'jumlah_hadirAK')->textInput() ?>

    <?= $form->field($model, 'anak_tanggung')->textInput() ?>

    <?= $form->field($model, 'jumlah_hadirAT')->textInput() ?>

    <?= $form->field($model, 'anak_remaja')->textInput() ?>

    <?= $form->field($model, 'jumlah_hadirR')->textInput() ?>

    <?= $form->field($model, 'ket')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_mingguan')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
