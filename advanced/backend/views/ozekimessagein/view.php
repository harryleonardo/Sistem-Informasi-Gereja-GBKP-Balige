<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Ozekimessagein */

$this->title = $model->sender;
$this->params['breadcrumbs'][] = ['label' => 'Ozekimessageins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="ozekimessagein-view">

    <h1><?= Html::encode($this->title) ?></h1>

        <h3>Jumlah Hadir</h3>
            <?php echo '<pre>',$tamp[1],'</pre>'?>
        <h3>Sektor</h3> 
            <?php echo '<pre>',$tamp[2],'</pre>' ?>
        <h3>Total Persembahan</h3> 
            <?php echo '<pre>',$tamp[3],'</pre>' ?>
        <h3>Tempat Pjj</h3> 
            <?php echo '<pre>',$tamp[4],'</pre>' ?>
        <h3>Tempat Pjj Selanjutnya</h3> 
            <?php echo '<pre>',$tamp[5],'</pre>' ?>

        <?= Html::a('Tambahkan Data', ['kegiatan/tambahkandata','jumlahHadir' => $tamp[1],'sektor'=>$tamp[2],'totalper'=>$tamp[3],'tptPjj'=>$tamp[4],'pjjsel'=>$tamp[5],'receive'=>$model->receivedtime], ['class' => 'btn btn-info']) ?>

</div>
