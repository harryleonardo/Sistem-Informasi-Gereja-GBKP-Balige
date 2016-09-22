<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use wbraganca\dynamicform\DynamicFormWidget;
use yii\bootstrap\Dropdown;
/* @var $this yii\web\View */
/* @var $model frontend\models\Datadiri */
/* @var $form yii\widgets\ActiveForm */
$this->title = 'Register';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="Register-form">

<?php $form = ActiveForm::begin(['id'=> 'dynamic-form']); ?>

<div class="panel-group" id="accordion">    
    <div class="panel panel-info">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#dataDiri" center>Data Diri</a>
            </h4>
        </div>
                <div id="dataDiri" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12"> 
                                <!-- Data diri-->
                                <?= $form->field($model, 'nomor_anggota')->textInput() ?>

                                <?= $form->field($model, 'sektor')->textInput(['maxlength' => true]) ?>

                                <?= $form->field($model, 'nama_lengkap')->textInput(['maxlength' => true]) ?>

                                <?= $form->field($model, 'tempat_lahir_diri')->textInput(['maxlength' => true]) ?>

                                <!--?= $form->field($model, 'tanggal_lahir')->textInput() ?-->

                                <?= '<label class="control-label">Tanggal Lahir</label>';?>
                                
                                <?= DatePicker::widget([
                                'name' => 'tanggal_lahir_diri',
                                'type' => DatePicker::TYPE_COMPONENT_APPEND,
                                'pluginOptions' => [
                                    'autoclose'=>true,
                                    'format' => 'yyyy-mm-dd'
                                    ]
                                ]);?>

                                <!--?= $form->field($model, 'jenis_kelamin')->textInput(['maxlength' => true]) ?-->

                                <?= $form->field($model, 'jenis_kelamin')->dropDownList([
                                    'L' => 'Laki-laki',
                                    'P' => 'Perempuan',],
                                    ['prompt'=>''])?>

                                <!--?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?-->

                                <?= $form->field($model, 'status')->dropDownList([
                                    'Suami' => 'Suami',
                                    'Istri' => 'Istri',
                                    'Anak' => 'Saudara',
                                    'Belum Menikah' => 'Belum Menikah',
                                    'Menikah' => 'Menikah',
                                    'Janda' => 'Janda',
                                    'Duda' => 'Duda',
                                    ],
                                    ['prompt'=>'Status dalam keluarga'])?>

                                <?= $form->field($model, 'alamat_jelas')->textInput(['maxlength' => true]) ?>

                                <!--?= $form->field($model, 'golDarah')->textInput(['maxlength' => true]) ?-->

                                <?= $form->field($model, 'golDarah')->dropDownList([
                                    'A' => 'A',
                                    'B' => 'B',
                                    'AB' => 'AB',
                                    'O' => 'O',
                                    'RH+' => 'RH+',
                                    'RH-' => 'RH-',
                                    ],
                                    ['prompt'=>'Golongan Darah'])?>

                                <!--?= $form->field($model, 'pendidikan')->textInput(['maxlength' => true]) ?-->

                                <?= $form->field($model, 'pendidikan')->dropDownList([
                                    'SD' => 'SD',
                                    'SLTP' => 'SLTP',
                                    'SLTA' => 'SLTA',
                                    'D1' => 'D1',
                                    'D2' => 'D2',
                                    'D3' => 'D3',
                                    'S1' => 'S1',
                                    'S2' => 'S2',
                                    'S3' => 'S3',
                                    ],
                                    ['prompt'=>''])?>

                                    <!-- <div class="dropdown">
                                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Label <b class="caret"></b></a>
                                        <?php
                                            echo Dropdown::widget([
                                                'items' => [
                                                    ['label' => 'DropdownA', 'url' => '/'],
                                                    ['label' => 'DropdownB', 'url' => '#'],
                                                ],
                                            ]);
                                        ?>
                                    </div> -->

                                <!--?= $form->field($model, 'bidang_Ilmu')->textInput(['maxlength' => true]) ?-->

                                <?= $form->field($model, 'bidang_Ilmu')->dropDownList([
                                    'Tekhnik' => 'Tekhnik',
                                    'Hukum' => 'Hukum',
                                    'Sastra' => 'Sastra',
                                    'Ekonomi' => 'Ekonomi',
                                    'Kedokteran' => 'Kedokteran',
                                    'Sosial' => 'Sosial',
                                    'Politik' => 'Politik',
                                    'Komputer' => 'Komputer',
                                    'Theologia' => 'Theologia',
                                    'Pendidikan' =>'Pendidikan',
                                    ],
                                    ['prompt'=>'Bidang Ilmu / Keahlian'])?>

                                <?= $form->field($model, 'spesifikasi')->textInput(['maxlength' => true]) ?>

                                <!--?= $form->field($model, 'pekerjaan')->textInput(['maxlength' => true]) ?-->

                                <?= $form->field($model, 'pekerjaan')->dropDownList([
                                    'Wiraswasta' => 'Wiraswasta',
                                    'Pegawai Negeri' => 'Pegawai Negeri',
                                    'Guru' => 'Guru',
                                    'Pegawai Swasta' => 'Pegawai Swasta',
                                    'BUMN' => 'BUMN',
                                    'TNI' => 'TNI',
                                    'Instruktur' => 'Instruktur',
                                    'Bidang Keuangan' => 'Bidang Keuangan',
                                    'POLRI' => 'POLRI',
                                    'Pendeta' =>'Pendeta',
                                    'Petani' => 'Petani',
                                    'Nelayan' => 'Nelayan',
                                    'Dosen' => 'Dosen',
                                    'Pegawai Moderamen' => 'Pegawai Moderamen',
                                    'Pegawai Klasis' => 'Pegawai Klasis',
                                    'Pensiunan'=> 'Pensiunan', 
                                    ],
                                    ['prompt'=>'Pekerjaan'])?>

                                <?= $form->field($model, 'aktivitasDiMasyarakat')->textInput(['maxlength' => true]) ?>

                                <?= $form->field($model, 'status_accept')->textInput(['maxlength' => true]) ?>


                        </div>
                    </div>
                </div>
            </div>
        </div>



<div class="panel panel-info">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#dataGereja">Data Gereja</a>
            </h4>
        </div>
                <div id="dataGereja" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Data Gereja-->
                                <?= $form->field($model, 'asal_gereja')->textInput(['maxlength' => true]) ?>

                                <?= $form->field($model, 'aktivitas_diGereja')->textInput(['maxlength' => true]) ?>

                                <?= $form->field($model, 'status_keanggotaan')->textInput(['maxlength' => true]) ?>

                                <!--?= $form->field($model, 'id_datadiri')->textInput() ?-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>



<div class="panel panel-info">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#dataBaptis">Data Baptis</a>
            </h4>
        </div>
                <div id="dataBaptis" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12"> 
                                <!-- Data Baptis-->
                                <?= $form->field($model, 'tanggal_baptis')->textInput() ?>

                                <?= $form->field($model, 'tempat_baptis')->textInput(['maxlength' => true]) ?>

                                <?= $form->field($model, 'no_registrasi')->textInput() ?>

                                <?= $form->field($model, 'dilayani_oleh')->textInput(['maxlength' => true]) ?>

                                <!--?= $form->field($model, 'id_datagereja')->textInput() ?-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<div class="panel panel-info">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#dataSidi">Data Sidi</a>
            </h4>
        </div>
                <div id="dataSidi" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12"> 
                                <!-- Data Sidi-->
                                    <!--?= $form->field($model, 'id_datagereja')->textInput() ?-->   

                                    <?= '<label class="control-label">Tanggal Sidi</label>';?>
                                
                                    <?= DatePicker::widget([
                                        'name' => 'tanggal_sidi_diri',
                                        'type' => DatePicker::TYPE_COMPONENT_APPEND,
                                        'pluginOptions' => [
                                            'autoclose'=>true,
                                            'format' => 'yyyy-mm-dd'
                                            ]
                                    ]);?>

                                    <!-- <?= $form->field($model, 'tanggal_sidi_diri')->textInput() ?> -->

                                    <?= $form->field($model, 'tempat_sidi')->textInput(['maxlength' => true]) ?>

                                    <?= $form->field($model, 'no_registrasi_sidi')->textInput() ?>

                                    <?= $form->field($model, 'nama_pendeta')->textInput(['maxlength' => true]) ?>
                      
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    

<div class="panel panel-info">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#dataKeluarga">Data Keluarga</a>
            </h4>
        </div>
                <div id="dataKeluarga" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12"> 
                                <!-- Data Keluarga-->
                                <!--?= $form->field($model, 'id_datakeluarga')->textInput() ?-->

                                <?= $form->field($model, 'nama_istri')->textInput(['maxlength' => true]) ?>

                                <?= $form->field($model, 'tanggal_pernikahan')->textInput() ?>

                                <?= $form->field($model, 'tempat_menikah')->textInput(['maxlength' => true]) ?>

                                <?= $form->field($model, 'nama_pendeta_keluarga')->textInput(['maxlength' => true]) ?>

                                <?= $form->field($model, 'no_registrasi_keluarga')->textInput() ?>

                                <?= $form->field($model, 'status_dalam_keluarga')->textInput(['maxlength' => true]) ?>

                                <?= $form->field($model, 'nama_ayah')->textInput(['maxlength' => true]) ?>

                                <?= $form->field($model, 'nama_ibu')->textInput(['maxlength' => true]) ?>

                                <?= $form->field($model, 'jumlah_anak')->textInput() ?>

                                <!--?= $form->field($model, 'id_datadiri')->textInput() ?-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<div class="panel panel-info">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#dataIstri">Data Istri</a>
            </h4>
        </div>
                <div id="dataIstri" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12"> 

                                <!-- Data Istri-->
                                <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

                                <?= $form->field($model, 'tanggal_lahir_istri')->textInput() ?>

                                <?= $form->field($model, 'tanggal_baptis_istri')->textInput() ?>

                                <?= $form->field($model, 'no_baptis_istri')->textInput() ?>

                                <?= $form->field($model, 'tanggal_sidi_istri')->textInput() ?>

                                <?= $form->field($model, 'no_registrasi_istri')->textInput() ?>

                                <?= $form->field($model, 'asal_gereja_istri')->textInput(['maxlength' => true]) ?>

                                <!--?= $form->field($model, 'id_keluarga')->textInput() ?-->

                              </div>
                        </div>
                    </div>
                </div>
            </div>



<div class="panel panel-info">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#dataAnak">Data Anak</a>
            </h4>
        </div>
                <div id="dataAnak" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="row">
                                <div class="col-lg-12">

                                <!-- Data Anak-->
                                <div class="rows">
                                    <div class="panel panel-default">
                                    <div class="panel-heading"><h4><i class="glyphicon glyphicon-envelope"></i> Data Anak</h4></div>
                                    <div class="panel-body">
                                         <?php DynamicFormWidget::begin([
                                            'widgetContainer' => 'dynamicform_wrapper', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
                                            'widgetBody' => '.container-items', // required: css class selector
                                            'widgetItem' => '.item', // required: css class
                                            'limit' => 10, // the maximum times, an element can be cloned (default 999)
                                            'min' => 1, // 0 or 1 (default 1)
                                            'insertButton' => '.add-item', // css class
                                            'deleteButton' => '.remove-item', // css class
                                            'model' => $models1Dataanak[0],
                                            'formId' => 'dynamic-form',
                                            'formFields' => [
                                                'nama_anak',
                                                'tempat_lahir_anak',
                                                'tanggal_lahir_anak',
                                                'tanggal_baptis_anak',
                                            ],
                                        ]); ?>

                                        <div class="container-items"><!-- widgetContainer -->
                                        <?php foreach ($models1Dataanak as $i => $modelDataanak): ?>
                                            <div class="item panel panel-default"><!-- widgetBody -->
                                                <div class="panel-heading">
                                                    <h3 class="panel-title pull-left">Data Anak</h3>
                                                    <div class="pull-right">
                                                        <button type="button" class="add-item btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i></button>
                                                        <button type="button" class="remove-item btn btn-danger btn-xs"><i class="glyphicon glyphicon-minus"></i></button>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="panel-body">
                                                    <?php
                                                        // necessary for update action.
                                                        if (! $modelDataanak->isNewRecord) {
                                                            echo Html::activeHiddenInput($modelAddress, "[{$i}]id");
                                                        }
                                                    ?>
                                                    <?= $form->field($modelDataanak, "[{$i}]nama_anak")->textInput(['maxlength' => true]) ?>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <?= $form->field($modelDataanak, "[{$i}]tempat_lahir")->textInput(['maxlength' => true]) ?>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <?= $form->field($modelDataanak, "[{$i}]tanggal_lahir")->textInput(['maxlength' => true]) ?>
                                                        </div>
                                                    </div><!-- .row -->
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <?= $form->field($modelDataanak, "[{$i}]tanggal_baptis")->textInput(['maxlength' => true]) ?>
                                                        </div>
                                                    </div><!-- .row -->
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
        <?= Html::submitButton('Register', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
    </div>

        <?php ActiveForm::end(); ?>
</div>
