<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PersMingguanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pers Mingguans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pers-mingguan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pers Mingguan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_mingguan',
            'tanggal',
            'jumlah_lk',
            'jumlah_pr',
            'pers1',
            // 'pers2',
            // 'pers3',
            // 'total',
            // 'pers_kakr',
            // 'ket',
            // 'id_kegiatan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
