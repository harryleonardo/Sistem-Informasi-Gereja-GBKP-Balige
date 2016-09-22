<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Renungan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="renungan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_renungan')->textInput() ?>

    <?= $form->field($model, 'judul')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'penulis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'detail')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
