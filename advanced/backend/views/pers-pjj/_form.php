<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PersPjj */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pers-pjj-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'jumlah_hadir')->textInput() ?>

    <?= $form->field($model, 'sektor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total')->textInput() ?>

    <?= $form->field($model, 'tempat_pjj')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pjj_selanjutnya')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_kegiatan')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
