<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Dataanak */

$this->title = 'Create Dataanak';
$this->params['breadcrumbs'][] = ['label' => 'Dataanaks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dataanak-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
