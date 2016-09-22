<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\DataistriSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dataistris';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dataistri-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Dataistri', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_istri',
            'nama',
            'tanggal_lahir',
            'tanggal_baptis',
            'no_baptis',
            // 'tanggal_sidi',
            // 'no_registrasi',
            // 'asal_gereja',
            // 'id_keluarga',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
