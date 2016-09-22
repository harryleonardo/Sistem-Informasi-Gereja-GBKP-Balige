<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model frontend\models\Kegiatan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kegiatan-form">

    <?php $form = ActiveForm::begin(); ?>

    <!-- <?= $form->field($model, 'tanggal')->textInput() ?> -->
    <?= '<label class="control-label">Tanggal Lahir</label>';?>
                                
                                <?= DatePicker::widget([
                                'name' => 'tanggal',
                                'type' => DatePicker::TYPE_COMPONENT_APPEND,
                                'pluginOptions' => [
                                    'autoclose'=>true,
                                    'format' => 'yyyy-mm-dd'
                                    ]
                                ]);?>

    <?= $form->field($model, 'jumlah_hadir')->textInput() ?>

    <?= $form->field($model, 'total')->textInput() ?>

    <?= $form->field($model, 'jenis_kegiatan')->dropDownList([
                                    'Persembahan Perorangan' => 'Persembahan Perorangan',
                                    'Persembahan Pjj' => 'Persembahan Pjj',
                                    'Persembahan Mingguan' => 'Persembahan Mingguan',
                                    ],
                                    ['prompt'=>''])?>

    
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
