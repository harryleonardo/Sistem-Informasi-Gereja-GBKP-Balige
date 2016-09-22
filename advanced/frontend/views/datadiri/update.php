<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Datadiri */

$this->title = 'Update Datadiri: ' . ' ' . $model->id_datadiri;
$this->params['breadcrumbs'][] = ['label' => 'Datadiris', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_datadiri, 'url' => ['view', 'id' => $model->id_datadiri]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="datadiri-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
