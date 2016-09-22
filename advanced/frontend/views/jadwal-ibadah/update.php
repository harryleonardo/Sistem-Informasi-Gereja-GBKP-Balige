<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Jadwalibadah */

$this->title = 'Update Jadwalibadah: ' . ' ' . $model->id_jadwal;
$this->params['breadcrumbs'][] = ['label' => 'Jadwalibadahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_jadwal, 'url' => ['view', 'id' => $model->id_jadwal]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jadwalibadah-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
