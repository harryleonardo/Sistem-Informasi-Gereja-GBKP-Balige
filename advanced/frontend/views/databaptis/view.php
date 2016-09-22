<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Databaptis */

$this->title = $model->id_databaptis;
$this->params['breadcrumbs'][] = ['label' => 'Databaptis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="databaptis-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_databaptis], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_databaptis], [
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
            'id_databaptis',
            'tanggal_baptis',
            'tempat_baptis',
            'no_registrasi',
            'dilayani_oleh',
            'id_datagereja',
        ],
    ]) ?>

</div>
