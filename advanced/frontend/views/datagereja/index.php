<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\DatagerejaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Datagerejas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="datagereja-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Datagereja', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_datagereja',
            'asal_gereja',
            'aktivitas_diGereja',
            'status_keanggotaan',
            'id_datadiri',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

