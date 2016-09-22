<?php

namespace backend\controllers;

use Yii;
use backend\models\PersPjj;
use backend\models\Kegiatan;
use backend\models\KegiatanSearch;
use backend\models\Kegiatan_PersPersonal;
use backend\models\Kegiatan_PersKkr;
use backend\models\Kegiatan_PersPjj;
use backend\models\PersPersonal;
use backend\models\PersMinggguan;
use backend\models\Model;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use wbraganca\dynamicform\DynamicFormWidget;
use yii\data\SqlDataProvider;
use kartik\mpdf\Pdf;

/**
 * KegiatanController implements the CRUD actions for Kegiatan model.
 */
class KegiatanController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Kegiatan models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new KegiatanSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Kegiatan model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Kegiatan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Kegiatan();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_kegiatan]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    public function actionKegiatanperskakr(){
        $model = new Kegiatan_PersKkr();

        if($model->load(Yii::$app->request->post())){
            if($model->test(false)){
                return $this->redirect(['site/index']);
            }
        }

        return $this->render('kegiatanpersperskakr',[
        'model' => $model,
        ]);
    }

    public function actionKegiatanperspersonal(){
        $model = new Kegiatan_PersPersonal();
        $kegiatan = new Kegiatan();
        $Pers1Personal = [new PersPersonal];
        $PersPersonal = Model::createMultiple(PersPersonal::classname());
            Model::loadMultiple($PersPersonal, Yii::$app->request->post());

        if ($model->load(Yii::$app->request->post())) {
                //             echo 'Wew';
                // die();
            $kegiatan->tanggal = $model->tanggal;
            $kegiatan->jumlah_hadir = $model->jumlah_hadir;
            $kegiatan->total = $model->total;
            $kegiatan->jenis_kegiatan = "Persembahan Personal";
            
            if ($kegiatan->save()) {
                //$valid = $model->validate();

                $valid = Model::validateMultiple($PersPersonal);
                if ($valid) {
                    $transaction = \Yii::$app->db->beginTransaction();
                    try {
                            foreach ($PersPersonal as $PerPersonal) {
                                $PerPersonal->id_kegiatan = $kegiatan->id_kegiatan;

                                // echo $modelDataanak->id;
                                // echo $modelDataanak->id_datakeluarga;
                                
                                if (! ($flag = $PerPersonal->save(false))) {
                                    $transaction->rollBack();
                                    break;
                                }
                                
                            }
                            // die();
                        if ($flag) {
                            $transaction->commit();
                            //die();
                            return $this->redirect(['site/index']);
                        }
                    } catch (Exception $e) {    
                        //die();
                        $transaction->rollBack();
                    }
                    //die();
                }
                   //if (Yii::$app->getUser()->login($user)) {
                // die();
                    return $this->goHome();
                //}
            }
        }

        return $this->render('kegiatanperspersonal',[
        'model' => $model,
        'Pers1Personal' => (empty($Pers1Personal)) ? [new PersPersonal] : $Pers1Personal,
        ]);
    }

    public function actionKegiatanperspjj(){
        $model = new Kegiatan_PersPjj();
        $kegiatan = new Kegiatan();
        $Pers1Pjj = [new PersPjj];

        $PersPjj = Model::createMultiple(PersPjj::classname());
            Model::loadMultiple($PersPjj, Yii::$app->request->post());

        if ($model->load(Yii::$app->request->post())) {
                //             echo 'Wew';
                // die();
                $kegiatan->tanggal = $model->tanggal;
                $kegiatan->jumlah_hadir = $model->jumlah_hadir;
                $kegiatan->total = $model->total;
                $kegiatan->jenis_kegiatan = "Persembahan Pjj";

            if ($kegiatan->save()) {

                //$valid = $model->validate();
                $valid = Model::validateMultiple($PersPjj);
                if (!$valid) {
                    $transaction = \Yii::$app->db->beginTransaction();
                    try {
                        
                            foreach ($PersPjj as $PerPjj) {
                                $PerPjj->id_kegiatan = $kegiatan->id_kegiatan;

                                // $model->id_kegiatan;
                                // $PerPjj->id_kegiatan;
                                // echo $PerPersonal->nama;
                                // echo $modelDataanak->id;
                                // echo $modelDataanak->id_datakeluarga;
                                // die();

                                if (! ($flag = $PerPjj->save(false))) {
                                    $transaction->rollBack();
                                    break;
                                }
                                
                            }
                            // die();
                        if ($flag) {
                            $transaction->commit();
                            //die();
                            return $this->redirect(['site/index']);
                        }
                    } catch (Exception $e) {
                        //die();
                        $transaction->rollBack();
                    }
                    //die();
                }
                   //if (Yii::$app->getUser()->login($user)) {
                // die();
                    return $this->goHome();
                //}
            }
        }

        return $this->render('kegiatanperspjj',[
        'model' => $model,
        'Pers1Pjj' => (empty($Pers1Pjj)) ? [new PersPjj] : $Pers1Pjj,
        ]);

    }
    
    /**
     * Updates an existing Kegiatan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_kegiatan]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Kegiatan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Kegiatan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Kegiatan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Kegiatan::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }


    //Tambahkan data ke Pers Pjj
    public function actionTambahkandata($jumlahHadir,$sektor,$totalper,$tptPjj,$pjjsel,$receive){
        $modelKegiatan = new Kegiatan();
        $modelPersPjj = new Perspjj();

        $pjj = Perspjj::find()->all();
        $test = null;
        foreach ($pjj as $key) {
            $tanggal = $key->tanggal;
            $sektorpjj = $key->sektor;

            if(stripos($receive,$tanggal)!== false){
                if(stripos($sektorpjj,$sektor)!== false){
                    $test = 1;
                }
            }
        }
        
        // Data that exist in DB
        if($test == 1){
            Yii::$app->session->setFlash('error', 'Data telah pernah ditambahkan');

            return $this->redirect(['ozekimessagein/index']);
        }

        // Data doesn't exist in DB
        else{
            $modelKegiatan->tanggal = $receive;
            $modelKegiatan->jumlah_hadir = $jumlahHadir;
            $modelKegiatan->total = $totalper;
            $modelKegiatan->jenis_kegiatan = "Persembahan Pjj";
            if($modelKegiatan->save()){
                $modelPersPjj->id_kegiatan = $modelKegiatan->id_kegiatan;
                $modelPersPjj->tanggal = $receive;
                $modelPersPjj->jumlah_hadir = $jumlahHadir;
                $modelPersPjj->sektor = $sektor;
                $modelPersPjj->total = $totalper;
                $modelPersPjj->tempat_pjj = $tptPjj;
                $modelPersPjj->pjj_selanjutnya = $pjjsel;

                if($modelPersPjj->save()){
                    Yii::$app->session->setFlash('success', 'Penambahan Berhasil ! Data berhasil di save');

                    return $this->redirect(['ozekimessagein/index']);
                }
                else{
                    echo "A";
                    die();   
                }
            }else{
                echo "B";
                die();
            }
        }
    }


    // Laporan Bulanan
    public function actionLaporanbulanan(){
        $dataProvider = null;

        if(($bulan = Yii::$app->request->post('bulan')) && ($tahun = Yii::$app->request->post('tahun'))) {//($request) {//

        } else {
            $timeZone = 'Asia/Jakarta';
            $timestamp = time();
            $dt = new \DateTime("now", new \DateTimeZone($timeZone));
            $dt->setTimestamp($timestamp);
            $bulan = $dt->format('m');
            $tahun = $dt->format('Y');
        }

        // Mengambil nama bulan
        switch ($bulan) {
            case 1 :
                $namaBulan = 'Januari';
                break;
            case 2 :
                $namaBulan = 'Februari';
                break;
            case 3 :
                $namaBulan = 'Maret';
                break;
            case 4 :
                $namaBulan = 'April';
                break;
            case 5 :
                $namaBulan = 'Mei';
                break;
            case 6 :
                $namaBulan = 'Juni';
                break;
            case 7 :
                $namaBulan = 'Juli';
                break;
            case 8 :
                $namaBulan = 'Agustus';
                break;
            case 9 :
                $namaBulan = 'September';
                break;
            case 10 :
                $namaBulan = 'Oktober';
                break;
            case 11 :
                $namaBulan = 'November';
                break;
            case 12 :
                $namaBulan = 'Desember';
                break;
        }

        $kegiatanPersPersonal = new SqlDataProvider([
            'sql' => 'SELECT * FROM kegiatan INNER JOIN pers_personal ON kegiatan.id_kegiatan = pers_personal.id_kegiatan WHERE MONTH(kegiatan.tanggal) =:bulan AND YEAR(kegiatan.tanggal) =:tahun',
            'params' => [':bulan'=>$bulan,':tahun' => $tahun],
            'pagination'=>false,
        ]);

        $kegiatanPersPjj = new SqlDataProvider([
            'sql' => 'SELECT * FROM kegiatan INNER JOIN pers_pjj ON kegiatan.id_kegiatan = pers_pjj.id_kegiatan WHERE MONTH(kegiatan.tanggal) =:bulan AND YEAR(kegiatan.tanggal) =:tahun',
            'params' => [':bulan'=>$bulan,':tahun' => $tahun],
            'pagination'=>false,
        ]);

        $kegiatanPersKakr = new SqlDataProvider([
            'sql' => 'SELECT * FROM kegiatan INNER JOIN pers_mingguan ON kegiatan.id_kegiatan = pers_mingguan.id_kegiatan INNER JOIN pers_kakr ON pers_mingguan.id_mingguan = pers_kakr.id_mingguan WHERE MONTH(kegiatan.tanggal) =:bulan AND YEAR(kegiatan.tanggal) =:tahun',
            'params' => [':bulan'=>$bulan,':tahun' => $tahun],
            'pagination'=>false,
        ]);

        $sms = new SqlDataProvider([
            'sql' => 'SELECT * FROM ozekimessagein WHERE MONTH(ozekimessagein.receivedtime) =:bulan AND YEAR(ozekimessagein.receivedtime) =:tahun',
            'params' => [':bulan'=>$bulan,':tahun' => $tahun],
            'pagination'=>false,
        ]);
//        print_r($piketDataProvider->models);
//        die();

        return $this->render('laporanbulanan', [
            'kegiatanPersPersonal' => $kegiatanPersPersonal,
            'kegiatanPersPjj' => $kegiatanPersPjj,
            'kegiatanPersKakr' => $kegiatanPersKakr,
            'sms' => $sms,
            'namaBulan' => $namaBulan,
            'tahun' => $tahun,
            'bulan' => $bulan,
        ]);
    }

    //Get PDF Month
    public function actionGetPdf($bulan, $tahun, $namaBulan) {

        $kegiatanPersPersonal = new SqlDataProvider([
            'sql' => 'SELECT * FROM kegiatan INNER JOIN pers_personal ON kegiatan.id_kegiatan = pers_personal.id_kegiatan WHERE MONTH(kegiatan.tanggal) =:bulan AND YEAR(kegiatan.tanggal) =:tahun',
            'params' => [':bulan'=>$bulan,':tahun' => $tahun],
            'pagination'=>false,
        ]);

        $kegiatanPersPjj = new SqlDataProvider([
            'sql' => 'SELECT * FROM kegiatan INNER JOIN pers_pjj ON kegiatan.id_kegiatan = pers_pjj.id_kegiatan WHERE MONTH(kegiatan.tanggal) =:bulan AND YEAR(kegiatan.tanggal) =:tahun',
            'params' => [':bulan'=>$bulan,':tahun' => $tahun],
            'pagination'=>false,
        ]);

        $kegiatanPersKakr = new SqlDataProvider([
            'sql' => 'SELECT * FROM kegiatan INNER JOIN pers_mingguan ON kegiatan.id_kegiatan = pers_mingguan.id_kegiatan INNER JOIN pers_kakr ON pers_mingguan.id_mingguan = pers_kakr.id_mingguan WHERE MONTH(kegiatan.tanggal) =:bulan AND YEAR(kegiatan.tanggal) =:tahun',
            'params' => [':bulan'=>$bulan,':tahun' => $tahun],
            'pagination'=>false,
        ]);

        $sms = new SqlDataProvider([
            'sql' => 'SELECT * FROM ozekimessagein WHERE MONTH(ozekimessagein.receivedtime) =:bulan AND YEAR(ozekimessagein.receivedtime) =:tahun',
            'params' => [':bulan'=>$bulan,':tahun' => $tahun],
            'pagination'=>false,
        ]);

        // Formatter tanggal
        // $formatter = new \IntlDateFormatter("id_ID", \IntlDateFormatter::FULL, \IntlDateFormatter::FULL);
        // $formatter->setPattern('d MMMM Y');
        // $tanggal = $formatter->format(new \DateTime());

        $pdf = new Pdf([
            'filename' => 'Laporan' . $bulan . $tahun,
            'mode' => Pdf::MODE_UTF8,
            'content' => $this->renderPartial('laporanbulanan_pdf', 
                ['kegiatanPersPersonal' => $kegiatanPersPersonal, 'kegiatanPersPjj' => $kegiatanPersPjj,'kegiatanPersKakr' => $kegiatanPersKakr, 'namaBulan' => $namaBulan, 'tahun' => $tahun, 'bulan'=>$bulan, 'sms'=>$sms]),
            'options' => [
                'title' => 'Laporan Bulanan - PDF' ,
                'subject' => 'Laporan Bulan ' . $bulan . ' ' . $tahun
            ],
            'methods' => [
                'SetHeader' => ['Sistem Informasi Gereja'],
                'SetFooter' => ['|Page {PAGENO}|'],
            ]
        ]);

        return $pdf->render();
    }

    //Laporan Tahunan
    public function actionLaporantahunan(){
        $dataProvider = null;

        if(($tahun = Yii::$app->request->post('tahun'))) {//($request) {//

        } else {
            $timeZone = 'Asia/Jakarta';
            $timestamp = time();
            $dt = new \DateTime("now", new \DateTimeZone($timeZone));
            $dt->setTimestamp($timestamp);
            $tahun = $dt->format('Y');
        }

        $kegiatanPersPersonal = new SqlDataProvider([
            'sql' => 'SELECT * FROM kegiatan INNER JOIN pers_personal ON kegiatan.id_kegiatan = pers_personal.id_kegiatan WHERE YEAR(kegiatan.tanggal) =:tahun',
            'params' => [':tahun' => $tahun],
            'pagination'=>false,
        ]);

        $kegiatanPersPjj = new SqlDataProvider([
            'sql' => 'SELECT * FROM kegiatan INNER JOIN pers_pjj ON kegiatan.id_kegiatan = pers_pjj.id_kegiatan WHERE YEAR(kegiatan.tanggal) =:tahun',
            'params' => [':tahun' => $tahun],
            'pagination'=>false,

        ]);

        $kegiatanPersKakr = new SqlDataProvider([
            'sql' => 'SELECT * FROM kegiatan INNER JOIN pers_mingguan ON kegiatan.id_kegiatan = pers_mingguan.id_kegiatan INNER JOIN pers_kakr ON pers_mingguan.id_mingguan = pers_kakr.id_mingguan WHERE YEAR(kegiatan.tanggal) =:tahun',
            'params' => [':tahun' => $tahun],
            'pagination'=>false,
        ]);

        $sms = new SqlDataProvider([
            'sql' => 'SELECT * FROM ozekimessagein WHERE YEAR(ozekimessagein.receivedtime) =:tahun',
            'params' => [':tahun' => $tahun],
            'pagination'=>false,
        ]);
//        print_r($piketDataProvider->models);
//        die();

        return $this->render('laporantahunan', [
            'kegiatanPersPersonal' => $kegiatanPersPersonal,
            'kegiatanPersPjj' => $kegiatanPersPjj,
            'kegiatanPersKakr' => $kegiatanPersKakr,
            'tahun' => $tahun,
            'sms' => $sms,
        ]);
    }

    public function actionGetPdfTahunan($tahun) {

        $kegiatanPersPersonal = new SqlDataProvider([
            'sql' => 'SELECT * FROM kegiatan INNER JOIN pers_personal ON kegiatan.id_kegiatan = pers_personal.id_kegiatan WHERE YEAR(kegiatan.tanggal) =:tahun',
            'params' => [':tahun' => $tahun],
            'pagination'=>false,
        ]);

        $kegiatanPersPjj = new SqlDataProvider([
            'sql' => 'SELECT * FROM kegiatan INNER JOIN pers_pjj ON kegiatan.id_kegiatan = pers_pjj.id_kegiatan WHERE YEAR(kegiatan.tanggal) =:tahun',
            'params' => [':tahun' => $tahun],
            'pagination'=>false,
        ]);

        $kegiatanPersKakr = new SqlDataProvider([
            'sql' => 'SELECT * FROM kegiatan INNER JOIN pers_mingguan ON kegiatan.id_kegiatan = pers_mingguan.id_kegiatan INNER JOIN pers_kakr ON pers_mingguan.id_mingguan = pers_kakr.id_mingguan WHERE YEAR(kegiatan.tanggal) =:tahun',
            'params' => [':tahun' => $tahun],
            'pagination'=>false,
        ]);

        // Formatter tanggal
        // $formatter = new \IntlDateFormatter("id_ID", \IntlDateFormatter::FULL, \IntlDateFormatter::FULL);
        // $formatter->setPattern('d MMMM Y');
        // $tanggal = $formatter->format(new \DateTime());

        $pdf = new Pdf([
            'filename' => 'Laporan' . $tahun,
            'mode' => Pdf::MODE_UTF8,
            'content' => $this->renderPartial('laporantahunan_pdf',
                ['kegiatanPersPersonal' => $kegiatanPersPersonal, 'kegiatanPersPjj' => $kegiatanPersPjj,'kegiatanPersKakr' => $kegiatanPersKakr,'tahun' => $tahun]),
            'options' => [
                'title' => 'Laporan Bulanan - PDF' ,
                'subject' => 'Laporan Bulan ' . $tahun
            ],
            'methods' => [
                'SetHeader' => ['Sistem Informasi Gereja'],
                'SetFooter' => ['|Page {PAGENO}|'],
            ]
        ]);

        return $pdf->render();
    }

    public static function getTotal($dataProvider, $column) {
        $total = 0;
        foreach($dataProvider->models as $item){
            $total+=$item[$column];
        }

        return $total;
    }
}
