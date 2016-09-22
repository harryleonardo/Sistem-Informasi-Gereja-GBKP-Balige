<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\JadwalIbadahSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Download Tata Ibadah';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jadwalibadah-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <!-- <p>
        <?= Html::a('Create Jadwalibadah', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
 -->
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_jadwal_ibadah',
            // 'date',
            // 'jenis_minggu',
            // [,
                'jenis_minggu',
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
            // 'bahasa',
            // 'detail',

            // ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
