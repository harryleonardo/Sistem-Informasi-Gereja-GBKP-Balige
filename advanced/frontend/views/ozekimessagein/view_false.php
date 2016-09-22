<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Ozekimessagein */

$this->title = $model->sender;
$this->params['breadcrumbs'][] = ['label' => 'Pesan Masuk', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="ozekimessagein-view">
	<h1><?= Html::encode($this->title) ?></h1>

	Mohon maaf, Pesan tidak ditampilkan karena format yang diketik salah.<br>

	Pesan yang anda Kirim :<br>

	<?php echo '<pre>',$model->msg,'</pre>'?>

	Silahkan membaca Petunjuk dalam pengiriman SMS pada tampilan awal.<br>

</div>