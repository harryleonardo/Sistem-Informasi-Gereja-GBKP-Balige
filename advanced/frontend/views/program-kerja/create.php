<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\ProgramKerja */

$this->title = 'Create Program Kerja';
$this->params['breadcrumbs'][] = ['label' => 'Program Kerjas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="program-kerja-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
