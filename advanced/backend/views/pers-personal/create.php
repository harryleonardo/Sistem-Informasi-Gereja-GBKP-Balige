<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\PersPersonal */

$this->title = 'Create Pers Personal';
$this->params['breadcrumbs'][] = ['label' => 'Pers Personals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pers-personal-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
