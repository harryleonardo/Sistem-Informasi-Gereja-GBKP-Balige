<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Datagereja */

$this->title = 'Create Datagereja';
$this->params['breadcrumbs'][] = ['label' => 'Datagerejas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="datagereja-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
