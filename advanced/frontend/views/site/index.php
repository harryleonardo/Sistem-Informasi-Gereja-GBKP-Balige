<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
$asset = frontend\assets\AppAsset::register($this);
$baseUrl = $asset->baseUrl;

    

        // $pattern = '/[\x{ff0c}PDKM;]/u';
        // $test = '/[Pp Pm{Pk}],/u';
        // $string = "P 15000 D solihin K oh,that's all!";

        // echo '<pre>',"Ketik P TopikPesan D DeskripsiPesan",'</pre>';

        // echo '<pre>', print_r( preg_split( $pattern, $string )), '</pre>';
        // $x = preg_split( $pattern, $string );
        // echo '<pre>',$x[1],'</pre>';        
        // echo '<pre>',$x[2],'</pre>';
        // echo '<pre>',$x[3],'</pre>';
        // echo '<pre>', print_r( preg_split( $test, $kalimat ), 1 ), '</pre>';

?>

<div class="site-index">

   <div class="hero">
   <br>

   <center>
                
                  <h1> Mejuah-juah</h1>
                
          </center>

   
   
                <div class="slides">
                    <li data-bg-image="<?=$baseUrl?>/images/a.jpg">

                        <div class="container">
                            <div class="slide-content">
                                
                                
                            </div>
                        </div>
                    </li>

                    <li data-bg-image="<?=$baseUrl?>/images/b.jpg">
                        <div class="container">
                            <div class="slide-content">
                                

                                
                            </div>
                        </div>
                    </li>

                    <li data-bg-image="<?=$baseUrl?>/images/c.jpg">
                        <div class="container">
                            <div class="slide-content">
                                

                                
                            </div>
                        </div>
                    </li>

                    <li data-bg-image="<?=$baseUrl?>/images/d.jpg">
                        <div class="container">
                            <div class="slide-content">
                                

                                
                            </div>
                        </div>
                    </li>

                </div>
            </div>

    <div class="body-content">

        

                    <div class="fullwidth-block">
                    
                        <h2 class="section-title">Kategorial</h2>

                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="news">
                                    <image class="news-image" src="<?=$baseUrl?>/images/mamre.jpg"></image>
                                    <h3 class="news-title"><a href="index.php?r=site%2Fmamre">Mamre GBKP Rg. Balige</a></h3>
                                    <small class="date"><i class="fa fa-calendar"></i>30 Nov 1994</small>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="news">
                                    <image class="news-image" src="<?=$baseUrl?>/images/moria.jpg"></image>
                                    <h3 class="news-title"><a href="index.php?r=site%2Fmoria">Moria GBKP Rg. Balige</a></h3>
                                    <small class="date"><i class="fa fa-calendar"></i>16 Okt 1957</small>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="news">
                                    <image class="news-image" src="<?=$baseUrl?>/images/permata.png"></image>
                                    <h3 class="news-title"><a href="index.php?r=site%2Fpermata">Permata GBKP Rg. Balige</a></h3>
                                    <small class="date"><i class="fa fa-calendar"></i>9 Jan 1946</small>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="news">
                                    <image class="news-image" src="<?=$baseUrl?>/images/kakr.png"></image>
                                    <h3 class="news-title"><a href="index.php?r=site%2Fkakr">KA-KR GBKP Rg. Balige</a></h3>
                                    <small class="date"><i class="fa fa-calendar"></i>18 Apr 1890</small>
                                </div>
                            </div>
                        </div> <!-- .row -->
                   
                </div> <!-- section -->


                <div class="row">
                    <div class="col-lg-12">
                        <div class="content col-md-2">
                            <img src="<?=$baseUrl?>/images/sms.jpg" alt="">
                        </div>
                        <div class="content col-md-10">
                        <h3>Format Pengiriman Laporan Kegiatan</h3>
                           <?php
                    echo '<pre>',"* Jumlah_Hadir * Sektor * Total_Persembahan *  Tempat_PJJ * PJJ Selanjutnya 
                    Kirim ke 082304472068",'</pre>';
                ?>
                            <ul class="list-group-item-heading">
                    <li class="">* (yang pertama) untuk Jumlah hadir kebaktian PJJ.</li>
                    <li class="">* (yang kedua) untuk Sektor PJJ Jemaat.</li>
                    <li class="">* (yang ketiga) untuk Total Persembahan yang terkumpul.</li>
                    <li class="">* (yang keempat) untuk Tempat berlangsungnya PJJ.</li>
                    <li class="">* (yang kelima) untuk Tempat PJJ Selanjutnya.</li>
                    <li class="">Contoh : *20*1*100000*Pekan P.layanen Keluarga Bp.Agnes Ginting*Pekan P.layanen Keluarga Bp.Sari Sembiring</li>
                    <li class="">Jika Format SMS yang anda kirim salah, maka isi sms tidak akan ditampilkan.</li>
                </ul>
                        </div>
                </div>
            </div>

    </div>
