<?php
namespace backend\models;

use Yii;
use backend\models\Kegiatan;
use backend\models\PersPjj;
use yii\base\Model;
use yii\helpers\Html;
class Kegiatan_PersPjj extends Model{
	//Kegiatan
	public $id_kegiatan;
	public $tanggal;
	public $jumlah_hadir;
	public $total;
	public $jenis_kegiatan;

	//Data Persembahan Pjj
	public $tanggalPjj;
    public $jumlah_hadirPjj;
    public $totalPjj;
    public $pjj_selanjutnya;

	public function rules()
    {
        return [
        	//Kegiatan
            // [['tanggal', 'jumlah_hadir', 'total', 'jenis_kegiatan'], 'required'],
            [['tanggal'], 'safe'],
            [['jumlah_hadir'], 'integer'],
            [['total'], 'number'],
            [['jenis_kegiatan'], 'string', 'max' => 64],

            //Persembahan Pjj
             // [['tanggalPjj', 'jumlah_hadirPjj', 'sektor', 'totalPjj', 'tempat_pjj', 'pjj_selanjutnya', 'id_kegiatan'], 'required'],
            [['tanggal'], 'safe'],
            [['jumlah_hadirPjj', 'id_kegiatan'], 'integer'],
            [['totalPjj'], 'number'],
            [['sektor', 'tempat_pjj', 'pjj_selanjutnya'], 'string', 'max' => 64]
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

            //Persembahan Pjj
            'id_pjj' => 'Id Pjj',
            'tanggalPjj' => 'Tanggal',
            'jumlah_hadirPjj' => 'Jumlah Hadir',
            'sektor' => 'Sektor',
            'totalPjj' => 'Total',
            'tempat_pjj' => 'Tempat Pjj',
            'pjj_selanjutnya' => 'Pjj Selanjutnya',
            'id_kegiatan' => 'Id Kegiatan',
        ];
    }

    public function test(){
    	$kegiatan = new Kegiatan();
        $perPjj = new PersPjj();
        //Kegiatan
        $kegiatan->id_kegiatan = $this->id_kegiatan;
        $kegiatan->tanggal = $this->tanggal;
        $kegiatan->jumlah_hadir = $this->jumlah_hadir;
        $kegiatan->total = $this->total;
        $kegiatan->jenis_kegiatan = "Persembahan Pjj";

        // var_dump($test);
        $kegiatan->save();
        if($kegiatan->save()){
            $perPjj->tanggal = $this->tanggal;
            $perPjj->jumlah_hadir = $this->jumlah_hadirPjj;
            $perPjj->total = $this->totalPjj;
            $perPjj->pjj_selanjutnya = $this->pjj_selanjutnya;
            $perPjj->id_kegiatan = $kegiatan->id_kegiatan;
            $perPjj->save();
        }else{
            echo "Test";
        }

    return true;
    }
}