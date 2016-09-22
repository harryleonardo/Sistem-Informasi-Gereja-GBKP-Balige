<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DatadiriSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Jemaat';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="datadiri-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_datadiri',
            'nomor_anggota',
            'sektor',
            'nama_lengkap',
            'tempat_lahir',
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
            // 'no_telp',

            // [
            //         'class' => 'yii\grid\ActionColumn',
            //         'template' => '{update}',
            // ],

            [
                'attribute' => 'Action',
                'format' => 'raw',
                'value' => function ($model) {                       
                    return Html::a('Edit', ['update', 'id' => $model->id_datadiri], ['class' => 'btn btn-success']);
                        // return Html::a(Html::encode($files), ['download', 'data' => $model->detail]);
                        // return '<div>'. Html::a('view', [
                        //     'bookcopy/view','id'=>$model->id],
                        //     ['class' => 'btn btn-success']).'</div>';
                    },
            ],
        ],
    ]); ?>

</div>
