<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\ProgramKerja */

$this->title = $model->id_program;
$this->params['breadcrumbs'][] = ['label' => 'Program Kerjas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="program-kerja-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_program], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_program], [
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
            'id_program',
            'nama_program',
            'status',
            'Ket',
        ],
    ]) ?>

</div>
