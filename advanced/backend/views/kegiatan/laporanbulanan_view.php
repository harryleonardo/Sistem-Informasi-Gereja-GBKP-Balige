<?php

use yii\grid\GridView;

?>

<h2 class="text-center"><u><b>Laporan Bulan <?=$namaBulan . ' ' . $tahun?></b></u></h2>
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
                                'showFooter' => true,
                                'footerRowOptions'=>['style'=>'font-weight:bold;'],
                                // 'filterModel' => $searchModel,
                                'columns' => [
                                    ['class' => 'yii\grid\SerialColumn', 'header' => 'No.'],

                                    // 'id_personal',
                                    // 'id_kegiatan',

                                    // 'tanggal',

                                    [
                                        'attribute' => 'tanggal',
                                        'footer' => 'Total',
                                    ],
                                    // 'jumlah_hadir',
                                    // 'total',
                                    // 'jenis_kegiatan',
                                    'nama',
                                    'jenis_pers',
                                    'pos',

                                    // 'jumlah',
                                    [
                                        'attribute' => 'jumlah',
                                        'footer' => \frontend\controllers\KegiatanController::getTotal($kegiatanPersPersonal, 'jumlah'),
                                    ],

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
                            'showFooter' => true,
                                'footerRowOptions'=>['style'=>'font-weight:bold;'],
                            'columns' => [
                                ['class' => 'yii\grid\SerialColumn'],

                                // 'id_pjj',
                                [
                                        'attribute' => 'tanggal',
                                        'footer' => 'Total',
                                ],

                                'jumlah_hadir',
                                'sektor',
                                'total',
                                'tempat_pjj',
                                'pjj_selanjutnya',
                                [
                                        'attribute' => 'total',
                                        'footer' => \frontend\controllers\KegiatanController::getTotal($kegiatanPersPjj, 'total'),
                                ],
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
                            [
                                        'attribute' => 'tanggal',
                                        'footer' => 'Total',
                            ],

                            'jumlah_lk',
                            'jumlah_pr',
                            'anak_kecil',
                            'jumlah_hadirAK',
                            'anak_tanggung',
                            'jumlah_hadirAT',
                            'anak_remaja',
                            'jumlah_hadirR',
                            'pers1',
                            'pers2',
                            'pers3',
                            'total',
                            'pers_kakr',
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