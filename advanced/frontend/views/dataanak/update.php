<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Dataanak */

$this->title = 'Update Dataanak: ' . ' ' . $model->id_anak;
$this->params['breadcrumbs'][] = ['label' => 'Dataanaks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_anak, 'url' => ['view', 'id' => $model->id_anak]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dataanak-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
