<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\PersMingguan */

$this->title = 'Update Pers Mingguan: ' . ' ' . $model->id_mingguan;
$this->params['breadcrumbs'][] = ['label' => 'Pers Mingguans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_mingguan, 'url' => ['view', 'id' => $model->id_mingguan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pers-mingguan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
