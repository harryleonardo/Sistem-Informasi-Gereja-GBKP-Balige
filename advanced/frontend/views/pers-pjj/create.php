<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\PersPjj */

$this->title = 'Create Pers Pjj';
$this->params['breadcrumbs'][] = ['label' => 'Pers Pjjs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pers-pjj-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
