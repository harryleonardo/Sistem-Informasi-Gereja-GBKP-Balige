<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DatabaptisSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Databaptis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="databaptis-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Databaptis', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_databaptis',
            'tanggal_baptis',
            'tempat_baptis',
            'no_registrasi',
            'dilayani_oleh',
            // 'id_datagereja',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
