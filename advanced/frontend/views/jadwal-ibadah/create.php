<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Jadwalibadah */

$this->title = 'Create Jadwalibadah';
$this->params['breadcrumbs'][] = ['label' => 'Jadwalibadahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jadwalibadah-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
