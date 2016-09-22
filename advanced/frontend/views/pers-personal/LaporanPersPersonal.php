<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Modal;
use yii\widgets\Pjax;
use yii\web\UrlManager;
use yii\helpers\Url;
use frontend\models\PersPersonal;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\aitk\models\search\AitkRequestSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $dataProviderPending yii\data\ActiveDataProvider */
/* @var $dataProviderRejected yii\data\ActiveDataProvider */
//
$this->title = 'Print Preview';
$this->params['breadcrumbs'][] = $this->title;

?>

<style>
    #border {
        margin-top: -20px;
        
    }
    .formAll {
        
       //margin-top:100px
        text-align: center;
         height: 400px;
         font-size: 0.7em;
    }
    .headForm {

        width:80%;
        height:160px;
        clear:both;
        text-align: center;
        margin-left: auto;
        margin-right: auto;
        //margin-bottom: 80px;

    }
    .headForm img {

        width:7% !important;
        margin-left: auto;
        margin-right: auto;
    }
    .bodyForm {
        width:80%;
        /*height:20px;*/
        clear:both;
        text-align: left;
        margin-left: auto;
        margin-right: auto;

    }       
    .bodyForm table , #ijin, #alasan{

        font-size: 7pt;
    }

    #ijin {
        color:#666666;
        font-weight: bold;
        width:100%;
    }

    #alasan {
        //background-color: #23527c;
        color:#666666;
        font-weight: bold;
        width:100%;
        height:auto;
        /*text-indent: 2em;*/
    }


    .ttd  td{

        height: 50px;
        vertical-align:bottom;
//        width: 200px;
    }
    #sign {

        text-align: center;
        margin-left: auto;
        margin-right: auto;
        width:100%;
        max-height: 800px;

    }
    #sign .wali {
        
        text-align: left !important;
    }
    #sign .asrama {
        text-align: right !important;
    }
    #sign table {

        width:100%;

    }
    #sign table, #sign td, #sign th {
        //border: 1px solid black;
    }
    #sign table tr td {
        //border: solid 1px;

        text-align: center;

    }
</style>

<div class="aitk-request-printPreview">


    <h3>Laporan Kas Personal Sektor</h3> 
    <?php
        $sektor = $model->pos;
    ?>
    
    <div class="table-responsive" id="border">
        <div class="formAll">
            <div class="headForm">
                <img src="<?= Url::to('@web/images/') . 'ITD.jpg' ?>" width="50px">
                <h4>
                    FORM SURAT IJIN TIDAK HADIR KULIAH <br>
                    DAN/ATAU<br>
                    KELUAR KAMPUS PADA SAAT JAM AKADEMIK
                </h4>
            </div>
            <div class="bodyForm">
                Dengan ini, mahasiswa Institut Teknologi Del
                <table>
                    <tr><td>Nama</td> <td>:</td> <td> <?= $model->mahasiswa->nama_mahasiswa ?></td></tr>
                    <tr><td>Nim</td> <td>:</td> <td><?= $model->mahasiswa->nim ?></td></tr>
                    <tr><td>Kelas</td> <td>:</td> <td><?= $model->mahasiswa->kelas->kode_kelas ?></td></tr>
                </table>
                

                <p>Mohon Ijin Untuk: </p>
                <input class="form-control" id="ijin" disabled="true" value="<?= $ijin ?>">

                <?php
                $begin = explode(' ', $model->waktu_start);
                $end = explode(' ', $model->waktu_end);
                $fromDate = strtotime($begin[0]);
                $toDate = strtotime($end[0]);
                $dayFrom = date('w', $fromDate);
                $dayTo = date('w', $toDate);
                $hariMulai = $model->toDay($dayFrom);
                $hariSelesai = $model->toDay($dayTo);
                $dad = date('d-m-Y', $fromDate);

                ?>
                <table >
                    <tr>
                        <td>Hari</td><td>:&nbsp;&nbsp;</td> <td><?= $hariMulai ?>&nbsp;</td> 
                        <td>s/d</td> <td><?= $hariSelesai ?>&nbsp;</td></tr>
                    <tr>
                        <td>Tanggal</td> <td>:&nbsp;&nbsp;</td>  <td><?= $begin[0] ?>&nbsp;</td>
                        <td>s/d </td> 
                        <td><?= $end[0] ?>&nbsp;</td></tr>
                    <tr>


                        <td>Pukul</td><td>:&nbsp;&nbsp;</td><td><?= $begin[1] ?>&nbsp;</td>
                        <td>s/d&nbsp;</td>
                        <td>
                            <?= $end[1] ?>&nbsp;
                        </td>
                    </tr>

                </table>

                <p>
                    Dengan alasan/keperluan:
                </p>   

                <textarea class="form-control" id="alasan" >
                      <?= $model->alasan_ijin ?>
                </textarea>

                <p>Lampiran : 


                    <?= empty($model->lampiran) ? "................" : $model->lampiran; ?>
                </p>


                <div id="sign">

                    <table >
                        <tr >
                            <td colspan="2">Sitoluama, <?= date('d-m-Y') ?></td>
                        </tr>

                        <tr>
                            <td colspan="2">Mahasiswa</td>
                        </tr>

                        <tr class="ttd">
                            <td  colspan="2"><?= $model->mahasiswa->nama_mahasiswa?></td>
                        </tr>
                        <tr>
                            <td colspan="2">Menyetujui</td>
                        </tr>
                        <tr>
                            <td class="wali">Wali Kelas Mahasiswa</td> <td class="asrama"> Petugas Asrama</td>
                        </tr>

                        <tr class="ttd">
                            <td class="wali"> <p>Ttd.</p><?=$model->dosenWali->nama_dosen?></td> <td class="asrama"><p >Ttd.</p><?=$model->pengurusAsrama->nama_pengurus?></td>
                        </tr>

          
                    </table>
                </div>
            </div>
            <div class="footerForm">

            </div>

        </div>

    </div>
</div>






