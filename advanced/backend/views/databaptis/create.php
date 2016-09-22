<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Databaptis */

$this->title = 'Create Databaptis';
$this->params['breadcrumbs'][] = ['label' => 'Databaptis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="databaptis-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
