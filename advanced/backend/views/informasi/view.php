<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Informasi */

$this->title = $model->id_informasi;
$this->params['breadcrumbs'][] = ['label' => 'Informasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="informasi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_informasi], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_informasi], [
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
            'id_informasi',
            'judul',
            'tanggal',
            'deskripsi',
            'id',
        ],
    ]) ?>

</div>
