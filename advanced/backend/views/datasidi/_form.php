<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Datasidi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="datasidi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_datagereja')->textInput() ?>

    <?= $form->field($model, 'tanggal_sidi')->textInput() ?>

    <?= $form->field($model, 'tempat_sidi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_registrasi')->textInput() ?>

    <?= $form->field($model, 'nama_pendeta')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
