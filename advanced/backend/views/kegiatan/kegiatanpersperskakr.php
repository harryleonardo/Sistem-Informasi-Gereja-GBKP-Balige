<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
/* @var $this yii\web\View */
/* @var $model backend\models\Kegiatan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kegiatan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'jumlah_hadir')->textInput() ?>

    <?= $form->field($model, 'total')->textInput() ?>

	<div class="panel-group" id="accordion">

            <div class="panel panel-info">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#PersembahanMingguan">Data Persembahan Mingguan</a>
                    </h4>
                </div>
                <div id="PersembahanMingguan" class="panel-collapse collapse in">
                    <div class="panel-body">
				    <!-- Kegiatan Persembahan Mingguan -->

				    <?= $form->field($model, 'jumlah_lk')->textInput() ?>

				    <?= $form->field($model, 'jumlah_pr')->textInput() ?>

				    <?= $form->field($model, 'pers1')->textInput() ?>

				    <?= $form->field($model, 'pers2')->textInput() ?>

				    <?= $form->field($model, 'pers3')->textInput() ?>

				    <?= $form->field($model, 'total_mingguan')->textInput() ?>

				    <?= $form->field($model, 'pers_kakr')->textInput() ?>

				    <?= $form->field($model, 'ket')->textInput(['maxlength' => true]) ?>
				</div>

	        </div>
		</div>
	
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#PersembahanKakr">Data Persembahan Kakr</a>
                    </h4>
                </div>
                <div id="PersembahanKakr" class="panel-collapse collapse">
                    <div class="panel-body">
                    <!-- Kegiatan Persembahan Kakr -->
                    <?= $form->field($model, 'tanggal_perskkr')->textInput() ?>

                    <?= $form->field($model, 'anak_kecil')->textInput() ?>

                    <?= $form->field($model, 'jumlah_hadirAK')->textInput() ?>

                    <?= $form->field($model, 'anak_tanggung')->textInput() ?>

                    <?= $form->field($model, 'jumlah_hadirAT')->textInput() ?>

                    <?= $form->field($model, 'anak_remaja')->textInput() ?>

                    <?= $form->field($model, 'jumlah_hadirR')->textInput() ?>

                    <?= $form->field($model, 'ket_perskakr')->textInput(['maxlength' => true]) ?>
                    </div>
            </div>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Create', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div>
