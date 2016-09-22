<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Dataistri */

$this->title = 'Update Dataistri: ' . ' ' . $model->id_istri;
$this->params['breadcrumbs'][] = ['label' => 'Dataistris', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_istri, 'url' => ['view', 'id' => $model->id_istri]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dataistri-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
