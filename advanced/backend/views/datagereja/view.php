<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Datagereja */

$this->title = $model->id_datagereja;
$this->params['breadcrumbs'][] = ['label' => 'Datagerejas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="datagereja-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_datagereja], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_datagereja], [
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
            'id_datagereja',
            'asal_gereja',
            'aktivitas_diGereja',
            'status_keanggotaan',
            'id_datadiri',
        ],
    ]) ?>

</div>
