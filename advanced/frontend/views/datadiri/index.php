<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\DatadiriSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Datadiris';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="datadiri-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Datadiri', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_datadiri',
            'nomor_anggota',
            'sektor',
            'nama_lengkap',
            'tempat_lahir',
            // 'tanggal_lahir',
            // 'jenis_kelamin',
            // 'status',
            // 'alamat_jelas',
            // 'golDarah',
            // 'pendidikan',
            // 'bidang_Ilmu',
            // 'spesifikasi',
            // 'pekerjaan',
            // 'aktivitasDiMasyarakat',
            // 'status_accept',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
