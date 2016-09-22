<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Modal;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\RenunganSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Renungans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="renungan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    
    <p>
        <?= Html::button('Create Renungan',['value'=>Url::to('index.php?r=renungan/create') , 'class' => 'btn btn-success','id'=>'modalButton'])?>
    </p>
    
    <?php
        Modal::begin([
                'header' => '<h3>Renungan</h3>',
                'id'=>'modal',
                'size'=>'modal-lg',
            ]);

        echo "<div id = 'modalContent'></div>";

        Modal::end();
    ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_renungan',
            'judul',
            'penulis',
            // 'detail',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
