<?php

use yii\helpers\Html;
use yii\grid\GridView;
use kartik\daterange\DateRangePicker;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\OzekimessageinSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pesan Masuk';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ozekimessagein-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php
        // echo '<pre>', print_r($tamp), '</pre>';
        // echo '<pre>', $tamp[1], '</pre>';
        // echo '<pre>', $tamp[2], '</pre>';

        // $index1 = $tamp[1];
        // echo '<pre>', $sender, '</pre>';
        // die();
    ?>


    

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            // 'id',
            'sender',
            // 'receiver',
            // 'msg:ntext',
            // 'senttime',
            'receivedtime',
            // 'operator',
            // 'msgtype',
            // 'reference',

            // [
            //         'class' => 'yii\grid\ActionColumn',
            //         'template' => '{view}',
            // ],

            [
                'attribute' => 'Action',
                'format' => 'raw',
                'value' => function ($model) {                       
                    return Html::a('View', ['view', 'id' => $model->id], ['class' => 'btn btn-success']);
                        // return Html::a(Html::encode($files), ['download', 'data' => $model->detail]);
                        // return '<div>'. Html::a('view', [
                        //     'bookcopy/view','id'=>$model->id],
                        //     ['class' => 'btn btn-success']).'</div>';
                    },
            ],
        ],
    ]); ?>


</div>
