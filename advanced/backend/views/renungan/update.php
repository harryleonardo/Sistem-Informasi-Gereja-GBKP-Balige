<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Renungan */

$this->title = 'Update Renungan: ' . ' ' . $model->id_renungan;
$this->params['breadcrumbs'][] = ['label' => 'Renungans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_renungan, 'url' => ['view', 'id' => $model->id_renungan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="renungan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
