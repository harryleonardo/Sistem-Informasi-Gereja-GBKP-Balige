<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Dataanak */

$this->title = $model->id_anak;
$this->params['breadcrumbs'][] = ['label' => 'Dataanaks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dataanak-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_anak], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_anak], [
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
            'id_anak',
            'nama_anak',
            'tempat_lahir',
            'tanggal_lahir',
            'tanggal_baptis',
            'id_keluarga',
        ],
    ]) ?>

</div>
