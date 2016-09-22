<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DatasidiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Datasidis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="datasidi-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Datasidi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_datasidi',
            'id_datagereja',
            'tanggal_sidi',
            'tempat_sidi',
            'no_registrasi',
            // 'nama_pendeta',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
