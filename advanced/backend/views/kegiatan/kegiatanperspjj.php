<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use wbraganca\dynamicform\DynamicFormWidget;
/* @var $this yii\web\View */
/* @var $model frontend\models\Kegiatan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kegiatan-form">

    <?php $form = ActiveForm::begin(['id'=> 'dynamic-form']); ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'jumlah_hadir')->textInput() ?>

    <?= $form->field($model, 'total')->textInput() ?>

    <!-- Dynamic Form -->
    <div class="panel panel-info">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#dataAnak">Data Persembahan Pjj</a>
            </h4>
        </div>
                <div id="dataAnak" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="row">
                                <div class="col-lg-12">

                                <!-- Data Anak-->
                                <div class="rows">
                                    <div class="panel panel-default">
                                    <div class="panel-heading"><h4><i class="glyphicon glyphicon-envelope"></i> Data Persembahan Pjj</h4></div>
                                    <div class="panel-body">
                                         <?php DynamicFormWidget::begin([
                                            'widgetContainer' => 'dynamicform_wrapper', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
                                            'widgetBody' => '.container-items', // required: css class selector
                                            'widgetItem' => '.item', // required: css class
                                            'limit' => 5, // the maximum times, an element can be cloned (default 999)
                                            'min' => 1, // 0 or 1 (default 1)
                                            'insertButton' => '.add-item', // css class
                                            'deleteButton' => '.remove-item', // css class
                                            'model' => $Pers1Pjj[0],
                                            'formId' => 'dynamic-form',
                                            'formFields' => [
                                                'tanggal',
                                                'jumlah_hadir',
                                                'total',
                                                'tempat_pjj',
                                                'pjj_selanjutnya',
                                            ],
                                            ]);
                                        ?>

                                        <div class="container-items"><!-- widgetContainer -->
                                        <?php foreach ($Pers1Pjj as $i => $PersPjj): ?>
                                            <div class="item panel panel-default"><!-- widgetBody -->
                                                <div class="panel-heading">
                                                    <div class="pull-right">
                                                        <button type="button" class="add-item btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i></button>
                                                        <button type="button" class="remove-item btn btn-danger btn-xs"><i class="glyphicon glyphicon-minus"></i></button>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="panel-body">
                                                    <?php
                                                        // necessary for update action.
                                                        if (! $PersPjj->isNewRecord) {
                                                            echo Html::activeHiddenInput($modelAddress, "[{$i}]id");
                                                        }
                                                    ?>
                                                    <?= $form->field($PersPjj, "[{$i}]tanggal")->textInput(['maxlength' => true]) ?>

                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <?= $form->field($PersPjj, "[{$i}]jumlah_hadir")->textInput(['maxlength' => true]) ?>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <?= $form->field($PersPjj, "[{$i}]total")->textInput(['maxlength' => true]) ?>
                                                        </div>

                                                    </div><!-- .row -->

                                                    
                                                    <div class="row">

                                                        <div class="col-sm-6">
                                                            <?= $form->field($PersPjj, "[{$i}]tempat_pjj")->textInput(['maxlength' => true]) ?>
                                                        </div>
                                                        
                                                        <div class="col-sm-6">
                                                            <?= $form->field($PersPjj, "[{$i}]sektor")->textInput(['maxlength' => true]) ?>
                                                        </div>
                                                    </div><!-- .row -->

                                                    <?= $form->field($PersPjj, "[{$i}]pjj_selanjutnya")->textInput(['maxlength' => true]) ?>

                                                </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                        </div>
                                        <?php DynamicFormWidget::end(); ?>
                                    </div>  
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
                <!--?= $form->field($model, 'nama_anak')->textInput(['maxlength' => true]) ?-->

                <!--?= $form->field($model, 'tempat_lahir_anak')->textInput(['maxlength' => true]) ?-->

                <!--?= $form->field($model, 'tanggal_lahir_anak')->textInput() ?-->

                <!--?= $form->field($model, 'tanggal_baptis_anak')->textInput() ?-->
    </div>
    
     <div class="form-group">
        <?= Html::submitButton('Create', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
