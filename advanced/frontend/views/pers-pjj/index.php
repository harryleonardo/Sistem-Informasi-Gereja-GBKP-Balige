<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PersPjjSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pers Pjjs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pers-pjj-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pers Pjj', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_pjj',
            'tanggal',
            'jumlah_hadir',
            'sektor',
            'total',
            // 'tempat_pjj',
            // 'pjj_selanjutnya',
            // 'id_kegiatan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
