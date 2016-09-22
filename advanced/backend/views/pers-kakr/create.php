<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\PersKakr */

$this->title = 'Create Pers Kakr';
$this->params['breadcrumbs'][] = ['label' => 'Pers Kakrs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pers-kakr-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
