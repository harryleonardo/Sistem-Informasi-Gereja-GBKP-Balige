<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Ozekimessagein */

$this->title = 'Create Ozekimessagein';
$this->params['breadcrumbs'][] = ['label' => 'Ozekimessageins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ozekimessagein-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
