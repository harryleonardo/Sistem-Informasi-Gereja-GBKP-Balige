<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\JadwalIbadah */

$this->title = 'Create Jadwal Ibadah';
$this->params['breadcrumbs'][] = ['label' => 'Jadwal Ibadahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jadwal-ibadah-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
