<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Datadiri */

$this->title = 'Create Datadiri';
$this->params['breadcrumbs'][] = ['label' => 'Datadiris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="datadiri-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
