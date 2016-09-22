<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Datakeluarga */

$this->title = 'Update Datakeluarga: ' . ' ' . $model->id_datakeluarga;
$this->params['breadcrumbs'][] = ['label' => 'Datakeluargas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_datakeluarga, 'url' => ['view', 'id' => $model->id_datakeluarga]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="datakeluarga-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
