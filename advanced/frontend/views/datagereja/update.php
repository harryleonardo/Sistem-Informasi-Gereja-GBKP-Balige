<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Datagereja */

$this->title = 'Update Datagereja: ' . ' ' . $model->id_datagereja;
$this->params['breadcrumbs'][] = ['label' => 'Datagerejas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_datagereja, 'url' => ['view', 'id' => $model->id_datagereja]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="datagereja-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
