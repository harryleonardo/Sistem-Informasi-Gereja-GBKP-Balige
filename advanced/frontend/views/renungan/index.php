<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\RenunganSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$asset = frontend\assets\AppAsset::register($this);
$baseUrl = $asset->baseUrl;

$this->title = 'Renungans';
$this->params['breadcrumbs'][] = $this->title;
?>

            <div class="page-head" data-bg-image="<?=$baseUrl?>/images/bg4.jpg">
             
                    <h2 class="page-title">Renungan</h2>
                
            </div>
<div class="renungan-index">

    
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <!-- <p>
        <?= Html::a('Create Renungan', ['create'], ['class' => 'btn btn-success']) ?>
    </p> -->

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_renungan',
            [
                                'attribute' => 'judul',
                                'format'=>'raw',
                                'value'=>function($model){ 
                                      return Html::a(''.$model->judul.'',['view', 'id' => $model->id_renungan]);                               
                                }
                            ],
            'penulis',
            // 'detail',
            [
                'attribute' => 'Action',
                'format' => 'raw',
                'value' => function ($model) {                       
                    return Html::a('Download Renungan', ['download', 'data' => $model->detail], ['class' => 'btn btn-success']);
                        // return Html::a(Html::encode($files), ['download', 'data' => $model->detail]);
                        // return '<div>'. Html::a('view', [
                        //     'bookcopy/view','id'=>$model->id],
                        //     ['class' => 'btn btn-success']).'</div>';
                    },
            ],
            // ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
