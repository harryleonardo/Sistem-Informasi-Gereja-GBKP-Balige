<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\JadwalIbadah */

$this->title = 'Update Jadwal Ibadah: ' . ' ' . $model->id_jadwal;
$this->params['breadcrumbs'][] = ['label' => 'Jadwal Ibadahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_jadwal, 'url' => ['view', 'id' => $model->id_jadwal]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jadwal-ibadah-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
