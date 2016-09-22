<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\PersMingguan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pers-mingguan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_mingguan')->textInput() ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'jumlah_lk')->textInput() ?>

    <?= $form->field($model, 'jumlah_pr')->textInput() ?>

    <?= $form->field($model, 'pers1')->textInput() ?>

    <?= $form->field($model, 'pers2')->textInput() ?>

    <?= $form->field($model, 'pers3')->textInput() ?>

    <?= $form->field($model, 'total')->textInput() ?>

    <?= $form->field($model, 'pers_kakr')->textInput() ?>

    <?= $form->field($model, 'ket')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_kegiatan')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
