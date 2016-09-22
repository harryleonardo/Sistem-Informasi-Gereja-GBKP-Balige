<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Kegiatan */

$this->title = $model->id_kegiatan;
$this->params['breadcrumbs'][] = ['label' => 'Kegiatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kegiatan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_kegiatan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_kegiatan], [
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
            'id_kegiatan',
            'tanggal',
            'jumlah_hadir',
            'total',
            'jenis_kegiatan',
        ],
    ]) ?>

</div>
