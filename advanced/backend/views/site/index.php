<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Welcome!</h1>

        <p class="lead">Sistem Informasi Gereja Batak Karo Protestan</p>

       
    </div>

    <div class="body-content">

        <div class="row">
        <div class="col-lg-2">
        </div>
            <div class="col-lg-8">
        

                <h5>Cek SMS yang masuk : <?= date('D/M/Y - h:m:s ') ?></h5>
                <?php
                    echo '<pre>',"
                    * Jumlah_Hadir * Sektor * Total_Persembahan *  Tempat_PJJ * PJJ Selanjutnya 
                    Kirim ke 082304472068",'</pre>';
                ?>

                <p><a class="btn btn-default" href="index.php?r=ozekimessagein%2Findex">Lihat SMS</a></p>
            </div>
            
            
        </div>

    </div>
</div>
