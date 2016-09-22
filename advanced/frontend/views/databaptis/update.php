<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Databaptis */

$this->title = 'Update Databaptis: ' . ' ' . $model->id_databaptis;
$this->params['breadcrumbs'][] = ['label' => 'Databaptis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_databaptis, 'url' => ['view', 'id' => $model->id_databaptis]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="databaptis-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
