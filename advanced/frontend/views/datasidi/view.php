<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Datasidi */

$this->title = $model->id_datasidi;
$this->params['breadcrumbs'][] = ['label' => 'Datasidis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="datasidi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_datasidi], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_datasidi], [
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
            'id_datasidi',
            'id_datagereja',
            'tanggal_sidi',
            'tempat_sidi',
            'no_registrasi',
            'nama_pendeta',
        ],
    ]) ?>

</div>
