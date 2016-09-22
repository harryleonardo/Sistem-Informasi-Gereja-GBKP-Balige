<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\DetailView;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\TemplateLaporanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title = 'Data Jemaat';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="template-laporan-index">
         <div class="row">

         <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading"><h4><?= Html::encode($this->title) ?></h4></div>

            <!-- Table -->
                <table class="table">

                     <tr><td>Nama Lengkap</td> <td>:</td> <td><?php echo $model->nama_lengkap ?></td></tr>

                    <tr><td>Sektor</td> <td>:</td> <td><?php echo $model->sektor ?></td></tr>

                </table>
        </div>

            <div class="col-xs-12">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#datadiri" data-toggle="tab">Data Diri</a></li>
                            <li><a href="#datagereja" data-toggle="tab">Data Gereja</a></li>
                            <li><a href="#databaptis" data-toggle="tab">Data Baptis</a></li>
                            <li><a href="#datasidi" data-toggle="tab">Data Sidi</a></li>
                            <li><a href="#datakeluarga" data-toggle="tab">Data Keluarga</a></li>
                            <li><a href="#dataistri" data-toggle="tab">Data Istri</a></li>
                            <li><a href="#databaptis" data-toggle="tab">Data Baptis</a></li>
                            <li><a href="#dataanak" data-toggle="tab">Data Anak</a></li>
                        </ul>
                    <div class="tab-content">
                  <div class="active tab-pane" id="datadiri">
                    <!-- Post -->
                    <div class="post">
                             <?= DetailView::widget([
                                'model' => $model,
                                'attributes' => [
                                    // 'id_datadiri',
                                    'nomor_anggota',
                                    // 'sektor',
                                    // 'nama_lengkap',
                                    'tempat_lahir',
                                    'tanggal_lahir',
                                    'jenis_kelamin',
                                    'status',
                                    'alamat_jelas',
                                    'golDarah',
                                    'pendidikan',
                                    'bidang_Ilmu',
                                    'spesifikasi',
                                    'pekerjaan',
                                    'aktivitasDiMasyarakat',
                                    'no_telp',
                                ],
                            ]) ?>
                    </div>
                    
                  </div><!-- /.tab-pane -->
                  
                  <div class="tab-pane" id="datagereja">
                    <!-- The timeline -->                  
                       <?= GridView::widget([
                            'dataProvider' => $dataProviderDatagereja,
                            'columns' => [
                                // 'id_datagereja',
                                'asal_gereja',
                                'aktivitas_diGereja',
                                'status_keanggotaan',
                                // 'id_datadiri',
                            ],
                        ]) ?>                  
                </div> <!-- /.tab-pane -->


                <!-- Data Baptis-->
                <div class="tab-pane" id="databaptis">
                    <!-- The timeline -->                  
                        <?= GridView::widget([
                            'dataProvider' => $dataProviderDatabaptis,
                            'columns' => [
                                // 'id_databaptis',
                                'tanggal_baptis',
                                'tempat_baptis',
                                'no_registrasi',
                                'dilayani_oleh',
                                // 'id_datagereja',
                            ],
                        ]) ?>                
                </div> <!-- /.tab-pane -->



                <!-- Data Sidi-->
                <div class="tab-pane" id="datasidi">
                    <!-- The timeline -->
                        <?= GridView::widget([
                            'dataProvider' => $dataProviderDatasidi,
                            // 'filterModel' => $searchModel,
                            'columns' => [
                                ['class' => 'yii\grid\SerialColumn'],

                                // 'id_datasidi',
                                // 'id_datagereja',
                                'tanggal_sidi',
                                'tempat_sidi',
                                'no_registrasi',
                                // 'nama_pendeta',

                                // ['class' => 'yii\grid\ActionColumn'],
                            ],
                        ]); ?>                  
                </div> <!-- /.tab-pane -->



                <!-- Data Keluarga-->
                <div class="tab-pane" id="datakeluarga">
                        <?= GridView::widget([
                            'dataProvider' => $dataProviderDatakeluarga,
                            'columns' => [
                                // 'id_datakeluarga',
                                'nama_istri',
                                'tanggal_pernikahan',
                                'tempat_menikah',
                                'nama_pendeta',
                                'no_registrasi',
                                'status_dalam_keluarga',
                                'nama_ayah',
                                'nama_ibu',
                                'jumlah_anak',
                                // 'id_datadiri',
                            ],
                        ]) ?>      
                </div> <!-- /.tab-pane -->

                <!-- Data Istri-->
                <div class="tab-pane" id="dataistri">
                        <?= GridView::widget([
                            'dataProvider' => $dataProviderDataistri,
                            'columns' => [
                                // 'id_istri',
                                'nama',
                                'tanggal_lahir',
                                'tanggal_baptis',
                                'no_baptis',
                                'tanggal_sidi',
                                'no_registrasi',
                                'asal_gereja',
                                // 'id_keluarga',
                            ],
                        ]) ?>      
                </div> <!-- /.tab-pane -->

                <!-- Data Istri-->
                <div class="tab-pane" id="dataanak">
                     <?= GridView::widget([
                        'dataProvider' => $dataProviderDataanak,
                        'columns' => [
                            // 'id_anak',
                            'nama_anak',
                            'tempat_lahir',
                            'tanggal_lahir',
                            'tanggal_baptis',
                            // 'id_keluarga',
                        ],
                    ]) ?>
                </div> <!-- /.tab-pane -->
                            </div><!-- /.tab-content -->
                        </div><!-- /.nav-tabs-custom -->              
                    </div>
                
        </div>
</div>