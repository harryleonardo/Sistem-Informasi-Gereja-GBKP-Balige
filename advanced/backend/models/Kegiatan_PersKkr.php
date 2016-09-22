<?php
namespace backend\models;

use Yii;
use backend\models\Kegiatan;
use backend\models\PersPersonal;
use backend\models\PersMingguan;
use yii\base\Model;
use yii\helpers\Html;
use yii\web\Response;
class Kegiatan_PersKkr  extends Model{
	//Kegiatan
	public $id_kegiatan;
	public $tanggal;
	public $jumlah_hadir;
	public $total;
	public $jenis_kegiatan;

	//Data Persembahan Mingguan
    public $id_mingguan;
    public $jumlah_lk;
    public $jumlah_pr;
    public $pers1;
    public $pers2;
    public $pers3;
    public $total_mingguan;
    public $pers_kakr;
    public $ket;

    //Data Persembahan Kkr
    public $id_kakr;
    public $tanggal_perskkr;
    public $anak_kecil;
    public $jumlah_hadirAK;
    public $anak_tanggung;
    public $jumlah_hadirAT;
    public $anak_remaja;
    public $jumlah_hadirR;
    public $ket_perskakr;

	public function rules()
    {
        return [
        	//Kegiatan
            // [['tanggal', 'jumlah_hadir', 'total'], 'required'],

            [['tanggal'], 'safe'],
            [['jumlah_hadir'], 'integer'],
            [['total'], 'number'],
            [['jenis_kegiatan'], 'string', 'max' => 64],

            //Persembahan Mingguan
            // [['jumlah_lk', 'jumlah_pr', 'pers1', 'pers2', 'pers3', 'total_mingguan', 'pers_kakr', 'ket', 'id_kegiatan'], 'required'],
            [['jumlah_lk', 'jumlah_pr', 'id_kegiatan'], 'integer'],
            [['pers1', 'pers2', 'pers3', 'total_mingguan', 'pers_kakr'], 'number'],
            [['ket'], 'string', 'max' => 64],

            //Persembahan Kakr
            [['anak_kecil', 'jumlah_hadirAK', 'anak_tanggung', 'jumlah_hadirAT', 'anak_remaja', 'jumlah_hadirR', 'ket_perskakr', 'id_mingguan'], 'required'],
            [['anak_kecil', 'anak_tanggung', 'anak_remaja'], 'number'],
            [['jumlah_hadirAK', 'jumlah_hadirAT', 'jumlah_hadirR', 'id_mingguan'], 'integer'],
            [['ket_perskakr'], 'string', 'max' => 64]
        ];
    }

    public function attributeLabels()
    {
        return [
        	//Kegiatan
            'id_kegiatan' => 'Id Kegiatan',
            'tanggal' => 'Tanggal Kebaktian',
            'jumlah_hadir' => 'Jumlah Hadir',
            'total' => 'Total Persembahan',
            'jenis_kegiatan' => 'Jenis Kegiatan',

            //Persembahan Mingguan
            'id_mingguan' => 'Id Mingguan',
            'jumlah_lk' => 'Jumlah Laki-laki',
            'jumlah_pr' => 'Jumlah Perempuan',
            'pers1' => 'Persembahan 1',
            'pers2' => 'Persembahan 2',
            'pers3' => 'Persembahan 3',
            'total_mingguan' => 'Total Persembahan',
            'pers_kakr' => 'Pers Kakr ',
            'ket' => 'Keterangan Persembahan Mingguan',
            'id_kegiatan' => 'Id Kegiatan',

            //Persembahan Kakr
            'id_kakr' => 'Id Kakr',
            'tanggal_perskkr' => 'Tanggal Persembahan Kakr',
            'anak_kecil' => 'Anak Kecil',
            'jumlah_hadirAK' => 'Jumlah Hadir Anak Kecil',
            'anak_tanggung' => 'Anak Tanggung',
            'jumlah_hadirAT' => 'Jumlah Hadir Anak Tanggung',
            'anak_remaja' => 'Anak Remaja',
            'jumlah_hadirR' => 'Jumlah Hadir Remaja',
            'ket_perskakr' => 'Keterangan Persembahan Kakr',
            'id_mingguan' => 'Id Mingguan',
        ];
    }

    public function test(){
    	$kegiatan = new Kegiatan();
    	$PersMingguan = new PersMingguan();
        $PersKakr = new PersKakr();
    	//Kegiatan
    	$kegiatan->tanggal = $this->tanggal;
    	$kegiatan->jumlah_hadir = $this->jumlah_hadir;
    	$kegiatan->total = $this->total;
    	$kegiatan->jenis_kegiatan = "Persembahan Kakr";
    	// var_dump($test);
    	if($kegiatan->save()){
            $PersMingguan->jumlah_lk = $this->jumlah_lk;
            $PersMingguan->jumlah_pr = $this->jumlah_pr;
            $PersMingguan->pers1 = $this->pers1;
            $PersMingguan->pers2 = $this->pers2;
            $PersMingguan->pers3 = $this->pers3;
            $PersMingguan->total = $this->total_mingguan;
            $PersMingguan->pers_kakr = $this->pers_kakr;
            $PersMingguan->ket = $this->ket;
            $PersMingguan->id_kegiatan = $kegiatan->id_kegiatan;

            if($PersMingguan->save()){
                $PersKakr->anak_kecil = $this->anak_kecil;
                $PersKakr->jumlah_hadirAK = $this->jumlah_hadirAK;
                $PersKakr->anak_tanggung = $this->anak_tanggung;
                $PersKakr->jumlah_hadirAT = $this->jumlah_hadirAT;
                $PersKakr->anak_remaja = $this->anak_remaja;
                $PersKakr->jumlah_hadirR = $this->jumlah_hadirR;
                $PersKakr->ket = $this->ket_perskakr;
                $PersKakr->id_mingguan = $PersMingguan->id_mingguan;

                if($PersKakr->save()){
                    Yii::$app->getSession()->setFlash('success', [
                        // 'type' => 'success',
                        // 'delay' => 50000,
                        // 'icon' => 'glyphicon glyphicon-ok',
                        'message' => 'Pengisian data berhasil dilakukan',
                        // 'title' => 'Successfull...',
                    ]);
                    // return $this->redirect(['site']);
                    // return $this->redirect('site');
                }
                else{
                    print_r($PersKakr->errors);
                    echo 'hai';
                    die();
                }
            }else{
                print_r($PersMingguan->errors);
                echo 'Test';
                die();   
            }
        }else{
            print_r($kegiatan->errors);
            echo 'GO';
            die();
        }

    	return true;
    }
}
?>