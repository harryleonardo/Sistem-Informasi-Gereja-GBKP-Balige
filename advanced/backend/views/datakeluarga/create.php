<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Datakeluarga */

$this->title = 'Create Datakeluarga';
$this->params['breadcrumbs'][] = ['label' => 'Datakeluargas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="datakeluarga-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
