<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DatakeluargaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Datakeluargas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="datakeluarga-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Datakeluarga', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_datakeluarga',
            'nama_istri',
            'tanggal_pernikahan',
            'tempat_menikah',
            'nama_pendeta',
            // 'no_registrasi',
            // 'status_dalam_keluarga',
            // 'nama_ayah',
            // 'nama_ibu',
            // 'jumlah_anak',
            // 'id_datadiri',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
