<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\ProgramKerja */

$this->title = 'Update Program Kerja: ' . ' ' . $model->id_program;
$this->params['breadcrumbs'][] = ['label' => 'Program Kerjas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_program, 'url' => ['view', 'id' => $model->id_program]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="program-kerja-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
