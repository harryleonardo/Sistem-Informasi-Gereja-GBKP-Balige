<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Datasidi */

$this->title = 'Update Datasidi: ' . ' ' . $model->id_datasidi;
$this->params['breadcrumbs'][] = ['label' => 'Datasidis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_datasidi, 'url' => ['view', 'id' => $model->id_datasidi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="datasidi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
