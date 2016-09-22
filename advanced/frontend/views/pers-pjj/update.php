<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\PersPjj */

$this->title = 'Update Pers Pjj: ' . ' ' . $model->id_pjj;
$this->params['breadcrumbs'][] = ['label' => 'Pers Pjjs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pjj, 'url' => ['view', 'id' => $model->id_pjj]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pers-pjj-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
