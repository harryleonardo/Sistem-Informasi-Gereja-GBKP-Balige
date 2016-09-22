<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProgramKerjaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Program Kerjas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="program-kerja-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Program Kerja', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_program',
            'nama_program',
            'status',
            'Ket',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
