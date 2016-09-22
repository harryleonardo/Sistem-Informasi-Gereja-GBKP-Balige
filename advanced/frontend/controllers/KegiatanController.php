<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Kegiatan;
use frontend\models\Perspjj;
use frontend\models\KegiatanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\SqlDataProvider;
use frontend\models\Ozekimessagein;
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

    // Laporan Mingguan
    public function actionLaporanmingguan(){
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $pdf = new Pdf([
            'filename' => 'Laporan Mingguan',
            'mode' => Pdf::MODE_UTF8,
            'content' => $this->renderPartial('laporanmingguan', [
                'dataProvider' => $dataProvider
                ]),
        ]);

        return $pdf->render();
    }


    //Laporan Range waktu
    public function actionForm_daterange(){
        $model = new Ozekimessagein();
        
        if(($terserah = Yii::$app->request->post())){
            echo $terserah->tanggal_awal;
            die();
        }        
        return $this->render('form_daterange', [
            'model' => $model,
        ]);
    }

    // Laporan Bulanan
    public function actionLaporanbulanan(){
        if(\Yii::$app->user->isGuest)
        {
            Yii::$app->session->setFlash('error', 'Anda harus login terlebih dahulu');
            $this->redirect(array('site/login'));
        }

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
        if(\Yii::$app->user->isGuest)
        {
            Yii::$app->session->setFlash('error', 'Anda harus login terlebih dahulu');
            $this->redirect(array('site/login'));
        }
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
                'title' => 'Laporan Tahunan - PDF' ,
                'subject' => 'Laporan Tahunan ' . $tahun
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
