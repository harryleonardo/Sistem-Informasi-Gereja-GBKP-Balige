<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\PersPjj */

$this->title = $model->id_pjj;
$this->params['breadcrumbs'][] = ['label' => 'Pers Pjjs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pers-pjj-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_pjj], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_pjj], [
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
            'id_pjj',
            'tanggal',
            'jumlah_hadir',
            'sektor',
            'total',
            'tempat_pjj',
            'pjj_selanjutnya',
            'id_kegiatan',
        ],
    ]) ?>

</div>
