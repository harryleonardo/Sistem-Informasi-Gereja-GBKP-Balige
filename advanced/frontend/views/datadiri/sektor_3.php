<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Datadiri */

$this->title = 'Sektor 3';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="datadiri-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <!-- p>
        <?= Html::a('Create Datadiri', ['create'], ['class' => 'btn btn-success']) ?>
    </p> -->

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_datadiri',
            // 'id_datakeluarga',
            // 'id_datagereja',
            // 'nomor_anggota',
            [
                                'attribute' => 'nama_lengkap',
                                'format'=>'raw',
                                'value'=>function($model){ 
                                      return Html::a(''.$model->nama_lengkap.'',['view_3', 'id' => $model->id_datadiri]);                               
                                }
                            ],
            // 'nama_lengkap',
            'jenis_kelamin',
            'sektor',
            // 'tempat_lahir',
            // 'tanggal_lahir',
            // 'jenis_kelamin',
            // 'status',
            // 'alamat_jelas',
            // 'golDarah',
            // 'pendidikan',
            // 'bidang_Ilmu',
            // 'spesifikasi',
            // 'pekerjaan',
            // 'aktivitasDiMasyarakat',

            // ['class' => 'yii\grid\ActionColumn'],
        ],
    ]) ?>

</div>
