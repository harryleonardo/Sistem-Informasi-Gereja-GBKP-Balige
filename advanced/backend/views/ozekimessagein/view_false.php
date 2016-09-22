<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = $model->sender;
$this->params['breadcrumbs'][] = ['label' => 'Ozekimessageins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="ozekimessagein-view">
	<h1><?= Html::encode($this->title) ?></h1>

	Pesan ini tidak perlu ditambahkan kedalam Pers PJJ<br>

	Format Pesan yang dikirim salah !<br>

	<?php echo '<pre>',$model->msg,'</pre>'?>

</div>