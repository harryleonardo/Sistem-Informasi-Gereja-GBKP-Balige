<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Laporan Bulanan';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="laporan-bulanan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?=Html::beginForm(['laporanbulanan'],'post');?>

        <?=Html::dropDownList(
            'bulan',
            (int)$bulan,
            [1 => 'Januari', 2 => 'Februari', 3 => 'Maret', 4 => 'April', 5 => 'Mei', 6 => 'Juni', 7 => 'Juli', 8 => 'Agustus', 9 => 'September', 10 => 'Oktober', 11 => 'November', 12 => 'Desember'],
            ['prompt' => 'Pilih Bulan...'])
        ?>

        <?=Html::textInput('tahun', (int)$tahun)?>

        <?=Html::submitButton('Lihat Laporan', ['class' => 'btn btn-info',]);?>

        <?= Html::endForm();?>
    </p>

    <?=$this->render('laporanbulanan_view', [
        'kegiatanPersPersonal' => $kegiatanPersPersonal,
        'kegiatanPersPjj' => $kegiatanPersPjj,
        'kegiatanPersKakr' => $kegiatanPersKakr,
        'namaBulan' => $namaBulan,
        'tahun' => $tahun,
        'bulan' => $bulan,
        'sms' => $sms,
    ])?>

    <?=Html::beginForm(['get-pdf', 'bulan' => $bulan, 'tahun' => $tahun, 'namaBulan' => $namaBulan],'post', ['target' => '_blank']);?> 

        <?=Html::submitButton('Download Laporan', ['class' => 'btn btn-success']);?>
    
    <?= Html::endForm();?>

</div>
