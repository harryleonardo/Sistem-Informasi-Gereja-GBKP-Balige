<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PersKakr */

$this->title = 'Update Pers Kakr: ' . ' ' . $model->id_kakr;
$this->params['breadcrumbs'][] = ['label' => 'Pers Kakrs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_kakr, 'url' => ['view', 'id' => $model->id_kakr]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pers-kakr-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
