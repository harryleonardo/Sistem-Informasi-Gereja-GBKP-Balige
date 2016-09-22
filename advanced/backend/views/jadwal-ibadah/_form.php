<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\web\UploadedFile;
use kartik\datetime\DateTimePicker;
use kartik\file\FileInput;
/* @var $this yii\web\View */
/* @var $model backend\models\JadwalIbadah */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jadwal-ibadah-form">

    <?php $form = ActiveForm::begin(['options' =>['enctype'=>'multipart/form-data']]); ?>

    
        <?= $form->field($model, 'hari_tanggal')->widget(DateTimePicker::className(),[
            'name' => 'hari_tanggal',
            'options' => ['placeholder' => 'Select operating time ...'],
            'convertFormat' => true,
            'pluginOptions' => [
                'format' => 'yyyy-MM-dd H:i:00',
                // 'startDate' => '01-Mar-2014 12:00 AM',
                'todayHighlight' => true,
            ],
        ]);
        ?>

    <?= $form->field($model, 'jenis_minggu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Bahasa')->textInput(['maxlength' => true]) ?>

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
