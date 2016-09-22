<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\PersMingguan */

$this->title = 'Create Pers Mingguan';
$this->params['breadcrumbs'][] = ['label' => 'Pers Mingguans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pers-mingguan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
