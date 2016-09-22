<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PersKakrSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pers Kakrs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pers-kakr-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pers Kakr', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_kakr',
            'tanggal',
            'anak_kecil',
            'jumlah_hadirAK',
            'anak_tanggung',
            // 'jumlah_hadirAT',
            // 'anak_remaja',
            // 'jumlah_hadirR',
            // 'ket',
            // 'id_mingguan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
