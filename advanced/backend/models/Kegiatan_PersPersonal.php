<?php
namespace backend\models;

use Yii;
use backend\models\Kegiatan;
use backend\models\PersPersonal;
use yii\base\Model;
use yii\helpers\Html;
class Kegiatan_PersPersonal extends Model{
	//Kegiatan
	public $id_kegiatan;
	public $tanggal;
	public $jumlah_hadir;
	public $total;
	public $jenis_kegiatan;

	//Data Persembahan Personal
	public $nama;
	public $jenis_pers;
	public $jumlah;
	public $pos;

	public function rules()
    {
        return [
        	//Kegiatan
            // [['tanggal', 'jumlah_hadir', 'total', 'jenis_kegiatan'], 'required'],
            [['tanggal'], 'safe'],
            [['jumlah_hadir'], 'integer'],
            [['total'], 'number'],
            [['jenis_kegiatan'], 'string', 'max' => 64],

            //Persembahan Personal
            // [['nama', 'jenis_pers', 'jumlah', 'pos', 'id_kegiatan'], 'required'],
            [['jumlah'], 'number'],
            [['id_kegiatan'], 'integer'],
            [['nama', 'jenis_pers', 'pos'], 'string', 'max' => 64],
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

            //Persembahan Personal
            'id_personal' => 'Id Personal',
            'nama' => 'Nama Lengkap',
            'jenis_pers' => 'Jenis Persembahan',
            'jumlah' => 'Jumlah Persembahan',
            'pos' => 'Tujuan',
            'id_kegiatan' => 'Id Kegiatan',
        ];
    }

    public function test(){
    	$kegiatan = new Kegiatan();
        $persPersonal = new PersPersonal();
        //Kegiatan
        $kegiatan->tanggal = $this->tanggal;
        $kegiatan->jumlah_hadir = $this->jumlah_hadir;
        $kegiatan->total = $this->total;
        $kegiatan->jenis_kegiatan = "Persembahan Personal";
        // var_dump($test);
        $kegiatan->save();
        if($kegiatan->save()){
            $persPersonal->nama = $this->nama;
            $persPersonal->jenis_pers =$this->jenis_pers;
            $persPersonal->jumlah = $this->jumlah;
            $persPersonal->pos = $this->pos;
            $persPersonal->id_kegiatan = $kegiatan->id_kegiatan;
            $persPersonal->save();
        }else{
            echo "Test";
        }

    return true;
    }
}