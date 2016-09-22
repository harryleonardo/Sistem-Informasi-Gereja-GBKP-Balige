<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Databaptis */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="databaptis-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tanggal_baptis')->textInput() ?>

    <?= $form->field($model, 'tempat_baptis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_registrasi')->textInput() ?>

    <?= $form->field($model, 'dilayani_oleh')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_datagereja')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
