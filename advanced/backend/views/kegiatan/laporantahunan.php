<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Laporan Tahunan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="laporan-tahunan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?=Html::beginForm(['laporantahunan'],'post');?>

        <?=Html::textInput('tahun', (int)$tahun)?>

        <?=Html::submitButton('Lihat Laporan', ['class' => 'btn btn-info',]);?>

        <?= Html::endForm();?>
    </p>

    <?=$this->render('laporantahunan_view', [
        'kegiatanPersPersonal' => $kegiatanPersPersonal,
        'kegiatanPersPjj' => $kegiatanPersPjj,
        'kegiatanPersKakr' => $kegiatanPersKakr,
        'tahun' => $tahun,
    ])?>

    <?=Html::beginForm(['get-pdf-tahunan', 'tahun' => $tahun],'post', ['target' => '_blank']);?> 

        <?=Html::submitButton('Download Laporan', ['class' => 'btn btn-success']);?>
    
    <?= Html::endForm();?>

</div>
