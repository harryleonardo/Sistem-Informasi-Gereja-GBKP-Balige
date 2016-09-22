<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\PersKakr */

$this->title = $model->id_kakr;
$this->params['breadcrumbs'][] = ['label' => 'Pers Kakrs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pers-kakr-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_kakr], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_kakr], [
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
            'id_kakr',
            'tanggal',
            'anak_kecil',
            'jumlah_hadirAK',
            'anak_tanggung',
            'jumlah_hadirAT',
            'anak_remaja',
            'jumlah_hadirR',
            'ket',
            'id_mingguan',
        ],
    ]) ?>

</div>
