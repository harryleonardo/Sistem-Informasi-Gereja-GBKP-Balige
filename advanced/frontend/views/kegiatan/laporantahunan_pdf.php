<?php

use yii\grid\GridView;

?>
<h2 class="text-center"><u><b>Laporan Tahun <?=$tahun?></b></u></h2>

<h4><b>Persembahan Personal</b></h4>
                            <?= GridView::widget([
                                'dataProvider' => $kegiatanPersPersonal,
                                // 'filterModel' => $searchModel,
                                'showFooter' => true,
                                'footerRowOptions'=>['style'=>'font-weight:bold;'],
                                'columns' => [
                                    ['class' => 'yii\grid\SerialColumn'],

                                    // 'id_personal',
                                    // 'id_kegiatan',

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
                                    [
                                        'attribute' => 'jumlah',
                                        'footer' => \frontend\controllers\KegiatanController::getTotal($kegiatanPersPersonal, 'jumlah'),
                                    ],
                                    // 'id_kegiatan',

                                    // ['class' => 'yii\grid\ActionColumn'],
                                ],
                            ]); ?>

<h3><b>Persembahan Pjj</b></h3>

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
                                'tempat_pjj',
                                'pjj_selanjutnya',
                                'total',
                                [
                                        'attribute' => 'total',
                                        'footer' => \frontend\controllers\KegiatanController::getTotal($kegiatanPersPjj, 'total'),
                                ],
                                // 'id_kegiatan',

                                // ['class' => 'yii\grid\ActionColumn'],
                            ],
                        ]); ?>


<h3><b>Persembahan Kakr</b></h3>
<?= GridView::widget([
                        'dataProvider' => $kegiatanPersKakr,
                        // 'filterModel' => $searchModel,
                        'showFooter' => true,
                        'footerRowOptions'=>['style'=>'font-weight:bold;'],
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            // 'id_mingguan',
                            [
                                        'attribute' => 'tanggal',
                                        'footer' => 'Total',
                            ],
                            'jumlah_lk',
                            'jumlah_pr',
                            'pers_kakr',
                            'anak_kecil',
                            'jumlah_hadirAK',
                            'anak_tanggung',
                            'jumlah_hadirAT',
                            'anak_remaja',
                            'jumlah_hadirR',
                            'pers1',
                            'pers2',
                            'pers3',
                            [
                                        'attribute' => 'total',
                                        'footer' => \frontend\controllers\KegiatanController::getTotal($kegiatanPersPjj, 'total'),
                            ],
                            // 'ket',
                            // 'id_kegiatan',

                            // ['class' => 'yii\grid\ActionColumn'],
                        ],
                    ]); ?>
