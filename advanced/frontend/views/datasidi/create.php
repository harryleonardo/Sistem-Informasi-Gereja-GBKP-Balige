<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Datasidi */

$this->title = 'Create Datasidi';
$this->params['breadcrumbs'][] = ['label' => 'Datasidis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="datasidi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
