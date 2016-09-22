<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\PersMingguan */

$this->title = $model->id_mingguan;
$this->params['breadcrumbs'][] = ['label' => 'Pers Mingguans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pers-mingguan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_mingguan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_mingguan], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_mingguan',
            'tanggal',
            'jumlah_lk',
            'jumlah_pr',
            'pers1',
            'pers2',
            'pers3',
            'total',
            'pers_kakr',
            'ket',
            'id_kegiatan',
        ],
    ]) ?>

</div>
