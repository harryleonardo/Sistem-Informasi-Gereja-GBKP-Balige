<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Renungan */

$this->title = 'Create Renungan';
$this->params['breadcrumbs'][] = ['label' => 'Renungans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="renungan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
