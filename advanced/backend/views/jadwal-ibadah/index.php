<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\bootstrap\Modal;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\JadwalIbadahSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Jadwal Ibadahs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jadwal-ibadah-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::button('Create Jadwal Ibadah',['value'=>Url::to('index.php?r=jadwal-ibadah/create') , 'class' => 'btn btn-success','id'=>'modalButton'])?>
    </p>

     <?php
        Modal::begin([
                'header' => '<h3>Jadwal Ibadah</h3>',
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

            // 'id_jadwal',
            'hari_tanggal',
            'jenis_minggu',
            'Bahasa',
            // 'ket',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
