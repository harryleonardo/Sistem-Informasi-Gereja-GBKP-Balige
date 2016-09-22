<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\OzekimessageinSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pesan Masuk';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ozekimessagein-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

<!--     <p>
        <?= Html::a('Create Ozekimessagein', ['create'], ['class' => 'btn btn-success']) ?>
    </p> -->

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            // 'id',
            'sender',
            // 'receiver',
            'msg:ntext',
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
