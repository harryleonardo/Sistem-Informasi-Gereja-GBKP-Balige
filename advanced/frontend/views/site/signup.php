<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$asset = frontend\assets\AppAsset::register($this);
$baseUrl = $asset->baseUrl;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <div class="row">

     

        <div class="col-lg-5">
        <div class="hero">
            <div class="slides">
                    <li data-bg-image="<?=$baseUrl?>/images/banner3.jpg">

                        
                    </li>

                    <li data-bg-image="<?=$baseUrl?>/images/as.png">
                        
                    </li>
                </div>
                </div>
        </div>

        <div class="col-lg-1">
        </div>

               <div class="col-lg-5">
            <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to signup:</p>
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>

            <br>


          
                                <br>


        </div>


                        



    </div>
</div>
