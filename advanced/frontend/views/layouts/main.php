<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

$asset = frontend\assets\AppAsset::register($this);
$baseUrl = $asset->baseUrl;


?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
    <div class="site-content">
    <header class="site-header">
                <div class="container">
                    

                   
                        
                        
                       
                        <ul class="menu">
                        
                        <a href="index.php?r=site%2Flogo"><img src="<?=$baseUrl?>/images/images.jpg" alt="" class="images"></a>
                        SiGer GBKP Rg. Balige
                            <?php
   
        
    $menuItems= [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'SMS', 'url' => ['/ozekimessagein']],
        ['label' => 'Renungan', 'url' => ['/renungan']],
        ['label' => 'Jadwal Ibadah', 'url' => ['/jadwal-ibadah']],
    ];

    $menuItems[]=[
        'label' => 'Jemaat', 'items' => [
                    ['label' => 'Sektor 1', 'url' => ['/datadiri/sektor_1']],
                    ['label' => 'Sektor 2', 'url' => ['/datadiri/sektor_2']],
                    ['label' => 'Sektor 3', 'url' => ['/datadiri/sektor_3']]
                ]];

    $menuItems[]=[
        'label' => 'Laporan', 'items' => [
                    ['label' => 'Laporan Bulanan', 'url' => ['/kegiatan/laporanbulanan']],
                    ['label' => 'Laporan Tahun', 'url' => ['/kegiatan/laporantahunan']]
                ]];

    $menuItems[]=[
        'label' => 'Profile', 'items' => [
                    ['label' => 'Sejarah', 'url' => ['/site/sejarah']],
                   
                    ['label' => 'Pengurus', 'url' => ['/site/pengurus']],
                    // ['label' => 'Program Kerja', 'url' => ['/program-kerja/index']],
                    ['label' => 'Google Maps', 'url' => ['/informasi/index']]
                ]];

    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
   
  
    ?>
                        </ul>
                    
                    <div class="mobile-navigation"></div>
                </div>
            </header>


            <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>
<footer class="site-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="widget">
                               <h6 class="widget-title">Alamat</h6>
                                <ul class="address">

                                    <li>Gereja Batak Karo Protestan</li>
                                    <li>Runggun/Majelis: Balige </li>
                                    <li>Klasis : P.Siantar</li>
                                    <li>Desa Tambunan - Kec. Balige - Kab. Toba Samosir</li>
                                    <li>Sumatera Utara - Indonesia</li>
                                    <li>Kode Pos : 22381</li>
                                </ul>
                                
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="widget">
                                
                                <h6 class="widget-title">Hubungi Kami</h6>
                                <ul class="address">
                                    <li><i class="fa fa-map-marker"></i> Jl. Raya Balige - Laguboti KM 3,5 Balige </li>
                                    <li><i class="fa fa-envelope"></i>  gebekape1994balige@gmail.com </li>

                                </ul>
                                
                            </div>
                        </div>
                    </div> <!-- .row -->

                </div><!-- .container -->

                <div class="footer_bottom">
                <div class="wrap">
                    <div class="container">
                        
                            <center> &copy; 2016 All right reserved - Yii2 Framework</center>
                       
                    </div>
                </div>
                </div>

            </footer> <!-- .site-footer -->

    </div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
