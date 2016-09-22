<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = $model->sender;
$this->params['breadcrumbs'][] = ['label' => 'Ozekimessageins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="ozekimessagein-view">
	<h1><?= Html::encode($this->title) ?></h1>

	<h3>Nomor ini tidak terdaftar sebagai Jemaat !!!</h3>

</div>