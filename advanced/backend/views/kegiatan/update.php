<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Kegiatan */

$this->title = 'Update Kegiatan: ' . ' ' . $model->id_kegiatan;
$this->params['breadcrumbs'][] = ['label' => 'Kegiatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_kegiatan, 'url' => ['view', 'id' => $model->id_kegiatan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kegiatan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
