<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Dataistri */

$this->title = $model->id_istri;
$this->params['breadcrumbs'][] = ['label' => 'Dataistris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dataistri-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_istri], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_istri], [
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
            'id_istri',
            'nama',
            'tanggal_lahir',
            'tanggal_baptis',
            'no_baptis',
            'tanggal_sidi',
            'no_registrasi',
            'asal_gereja',
            'id_keluarga',
        ],
    ]) ?>

</div>
