<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
/* @var $this yii\web\View */
/* @var $model backend\models\Renungan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="renungan-form">

    <?php $form = ActiveForm::begin(['options' =>['enctype'=>'multipart/form-data']]); ?>

    <?= $form->field($model, 'judul')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'penulis')->textInput(['maxlength' => true]) ?>

    <?='<label class="control-label">Add Attachments</label>';?>
	<?= FileInput::widget([
    	'model' => $model,
    	'attribute' => 'file',
    	'options' => ['multiple' => true]
	]);?> 

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
