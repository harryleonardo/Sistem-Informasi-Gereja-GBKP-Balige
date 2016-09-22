<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model frontend\models\Kegiatan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form_daterange">

    <?php $form = ActiveForm::begin(['form_daterange'],'post'); ?>

    <?= '<label class="control-label">Start Date</label>';?>
                                
                                <?= DatePicker::widget([
                                'name' => 'tanggal',
                                'type' => DatePicker::TYPE_COMPONENT_APPEND,
                                'pluginOptions' => [
                                    'autoclose'=>true,
                                    'format' => 'yyyy-mm-dd'
                                    ]
                                ]);?>


    <?= '<label class="control-label">End Date</label>';?>
                                
                                <?= DatePicker::widget([
                                'name' => 'tanggal',
                                'type' => DatePicker::TYPE_COMPONENT_APPEND,
                                'pluginOptions' => [
                                    'autoclose'=>true,
                                    'format' => 'yyyy-mm-dd'
                                    ]
                                ]);?>

    
    <div class="form-group">
        <?= Html::submitButton('Search', ['class' =>'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
