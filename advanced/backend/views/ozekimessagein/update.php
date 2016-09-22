<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Ozekimessagein */

$this->title = 'Update Ozekimessagein: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Ozekimessageins', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ozekimessagein-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
