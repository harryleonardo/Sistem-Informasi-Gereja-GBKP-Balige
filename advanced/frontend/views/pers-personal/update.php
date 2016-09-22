<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\PersPersonal */

$this->title = 'Update Pers Personal: ' . ' ' . $model->id_personal;
$this->params['breadcrumbs'][] = ['label' => 'Pers Personals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_personal, 'url' => ['view', 'id' => $model->id_personal]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pers-personal-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
