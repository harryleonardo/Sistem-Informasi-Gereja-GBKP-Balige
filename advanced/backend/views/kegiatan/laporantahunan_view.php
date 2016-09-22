<?php

use yii\grid\GridView;
use backend\controllers\KegiatanController;
?>

<h2 class="text-center"><u><b>Laporan Tahun <?=$tahun?></b></u></h2>
    <div class="template-laporan-index">
         <div class="row">
            <div class="col-xs-12">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#laporanpersembahanpersonal" data-toggle="tab">Laporan Persembahan Personal</a></li>
                            <li><a href="#laporanpersembahanpjj" data-toggle="tab">Laporan Persembahan Pjj</a></li>
                            <li><a href="#laporanpersembahanmingguan" data-toggle="tab">Laporan Persembahan Mingguan</a></li>
                        </ul>
                    <div class="tab-content">
                  <div class="active tab-pane" id="laporanpersembahanpersonal">
                    <!-- Post -->
                    <div class="post">
                             <?= GridView::widget([
                                'dataProvider' => $kegiatanPersPersonal,
                                // 'filterModel' => $searchModel,
                                'columns' => [
                                    ['class' => 'yii\grid\SerialColumn'],

                                    // 'id_personal',
                                    // 'id_kegiatan',
                                    'tanggal',
                                    // 'jumlah_hadir',
                                    // 'total',
                                    // 'jenis_kegiatan',
                                    'nama',
                                    'jenis_pers',
                                    'jumlah',
                                    'pos',
                                    
                                    // [
                                    //     'label'=>'Test',
                                    //     'value'=> KegiatanController::getTotal($kegiatanPersPersonal,'total'),
                                    // ],
                                    // 'id_kegiatan',

                                    // ['class' => 'yii\grid\ActionColumn'],
                                ],
                            ]); ?>
                    </div>
                    
                  </div><!-- /.tab-pane -->
                  
                  <div class="tab-pane" id="laporanpersembahanpjj">
                    <!-- The timeline -->                  
                       <?= GridView::widget([
                            'dataProvider' => $kegiatanPersPjj,
                            // 'filterModel' => $searchModel,
                            'columns' => [
                                ['class' => 'yii\grid\SerialColumn'],

                                // 'id_pjj',
                                'tanggal',
                                'jumlah_hadir',
                                'sektor',
                                'total',
                                'tempat_pjj',
                                'pjj_selanjutnya',
                                'total',
                                // [
                                //     'label'=>'Test',
                                //     'value'=> KegiatanController::getTotal($kegiatanPersPjj,'total'),
                                // ],
                                // 'id_kegiatan',

                                // ['class' => 'yii\grid\ActionColumn'],
                            ],
                        ]); ?>                 
                </div> <!-- /.tab-pane -->


                <!-- Data Baptis-->
                <div class="tab-pane" id="laporanpersembahanmingguan">
                    <!-- The timeline -->                  
                        <?= GridView::widget([
                        'dataProvider' => $kegiatanPersKakr,
                        // 'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            // 'id_mingguan',
                            'tanggal',
                            'jumlah_lk',
                            'jumlah_pr',
                            'pers1',
                            'pers2',
                            'pers3',
                            'total',
                            'pers_kakr',
                            'anak_kecil',
                            'jumlah_hadirAK',
                            'anak_tanggung',
                            'jumlah_hadirAT',
                            'anak_remaja',
                            'jumlah_hadirR',
                            // 'ket',
                            // 'id_kegiatan',

                            // ['class' => 'yii\grid\ActionColumn'],
                        ],
                    ]); ?>               
                </div> <!-- /.tab-pane -->
                            </div><!-- /.tab-content -->
                        </div><!-- /.nav-tabs-custom -->              
                    </div>
                
        </div>
</div>