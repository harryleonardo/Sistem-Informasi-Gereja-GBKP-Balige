<?php

use yii\grid\GridView;

?>
<h2 class="text-center"><u><b>Laporan Tahun <?=$tahun?></b></u></h2>

<h4><b>Persembahan Personal</b></h4>
                            <?= GridView::widget([
                                'dataProvider' => $kegiatanPersPersonal,
                                // 'filterModel' => $searchModel,
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
                                    'jumlah',
                                    'pos',
                                    // 'id_kegiatan',

                                    // ['class' => 'yii\grid\ActionColumn'],
                                ],
                            ]); ?>

<h3><b>Persembahan Pjj</b></h3>

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
                                // 'id_kegiatan',

                                // ['class' => 'yii\grid\ActionColumn'],
                            ],
                        ]); ?>


<h3><b>Persembahan Kakr</b></h3>
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
