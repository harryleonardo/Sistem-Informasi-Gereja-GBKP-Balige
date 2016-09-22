<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\JadwalIbadahSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Jadwal Ibadah';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jadwalibadah-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_jadwal',
            'hari_tanggal',
            'jenis_minggu',
            'Bahasa',
            // 'ket',
             [
                            'attribute' => 'Action',
                            'format' => 'raw',
                            'value' => function ($model) {                       
                                return Html::a('Download Tata Ibadah', ['download', 'data' => $model->ket], ['class' => 'btn btn-success']);
                                    // return Html::a(Html::encode($files), ['download', 'data' => $model->detail]);
                                    // return '<div>'. Html::a('view', [
                                    //     'bookcopy/view','id'=>$model->id],
                                    //     ['class' => 'btn btn-success']).'</div>';
                                },
                        ],
            // [
            //     'class' => 'yii\grid\ActionColumn',
            //     'template' => '{view}'],
                
        ],
    ]); ?>

</div>
