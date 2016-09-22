<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Datadiri */

$this->title = $model->id_datadiri;
$this->params['breadcrumbs'][] = ['label' => 'Datadiris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="datadiri-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_datadiri], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_datadiri], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_datadiri',
            'nomor_anggota',
            'sektor',
            'nama_lengkap',
            'tempat_lahir',
            'tanggal_lahir',
            'jenis_kelamin',
            'status',
            'alamat_jelas',
            'golDarah',
            'pendidikan',
            'bidang_Ilmu',
            'spesifikasi',
            'pekerjaan',
            'aktivitasDiMasyarakat',
            'no_telp',
        ],
    ]) ?>

</div>
