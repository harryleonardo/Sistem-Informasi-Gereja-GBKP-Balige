<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Dataistri */

$this->title = 'Create Dataistri';
$this->params['breadcrumbs'][] = ['label' => 'Dataistris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dataistri-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
