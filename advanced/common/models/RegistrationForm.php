<?php
namespace common\models;

use Yii;
use yii\base\Model;
use frontend\models\Datadiri;
use frontend\models\Datagereja;
use frontend\models\Databaptis;
use frontend\models\Dataistri;
use frontend\models\Datakeluarga;
use frontend\models\Datasidi;
use frontend\models\Dataanak;

/**
 * Login form
 */
class RegistrationForm extends Model
{
	//Data Diri
	public $nomor_anggota;
	// public $tanggal_lahir;
	public $sektor;
	public $nama_lengkap;
	public $tempat_lahir_diri;
    public $tanggal_lahir_diri;
	public $jenis_kelamin;
	public $status;
	public $alamat_jelas;
	public $golDarah;
	public $pendidikan;
	public $bidang_Ilmu;
	public $spesifikasi;
	public $pekerjaan;
	public $aktivitasDiMasyarakat;
    public $no_telp;

	//Data Sidi
	public $id_datagereja;
	public $no_registrasi_sidi;
	public $nama_pendeta;
	public $tanggal_sidi_diri;
	public $tempat_sidi;


	//Data Gereja
	public $asal_gereja;
	public $aktivitas_diGereja;
	public $status_keanggotaan;
	public $id_datadiri;


	//Data Anak
	public $nama_anak;
	public $tempat_lahir_anak;
	public $tanggal_baptis_anak;
	public $id_keluarga;
    public $tanggal_lahir_anak;


	//Data Baptis
	public $tanggal_baptis;
	public $tempat_baptis;
	public $no_registrasi_baptis;
	public $dilayani_oleh;


	//Data Keluarga

	public $id_datakeluarga;
	public $nama_istri;
    public $tanggal_pernikahan;
	public $tempat_menikah;
	public $nama_pendeta_keluarga;
	public $no_registrasi_keluarga;
	public $status_dalam_keluarga;
	public $nama_ibu;
	public $nama_ayah;
	public $jumlah_anak;


	//Data Istri
	public $nama;
	public $tanggal_lahir_istri;
	public $tanggal_baptis_istri;
	public $no_registrasi_istri;
	public $asal_gereja_istri;
	public $no_baptis_istri;
    public $tanggal_sidi_istri;

	public function rules()
    {
        return [
            //Data Diri
            // [['nomor_anggota', 'sektor', 'nama_lengkap', 'tempat_lahir', 'jenis_kelamin', 'status', 'alamat_jelas', 'golDarah', 'pendidikan', 'bidang_Ilmu', 'spesifikasi', 'pekerjaan', 'aktivitasDiMasyarakat', 'no_telp'], 'required'],
            [['nomor_anggota'], 'integer'],
            [['tanggal_lahir'], 'safe'],
            [['sektor', 'nama_lengkap', 'tempat_lahir_diri', 'alamat_jelas', 'pendidikan', 'bidang_Ilmu', 'spesifikasi', 'pekerjaan', 'aktivitasDiMasyarakat'], 'string', 'max' => 64],
            [['jenis_kelamin', 'golDarah'], 'string', 'max' => 10],
            [['status'], 'string', 'max' => 25],
            [['no_telp'], 'string', 'max' => 30],

            //Data Sidi
            // [['id_datagereja', 'tempat_sidi', 'no_registrasi_sidi', 'nama_pendeta'], 'required'],
            [['id_datagereja', 'no_registrasi_sidi'], 'integer'],
            [['tanggal_sidi_diri'], 'safe'],
            [['tempat_sidi', 'nama_pendeta'], 'string', 'max' => 64],


            //Data Gereja
            // [['asal_gereja', 'aktivitas_diGereja', 'status_keanggotaan', 'id_datadiri'], 'required'],
            [['id_datadiri'], 'integer'],
            [['asal_gereja', 'aktivitas_diGereja', 'status_keanggotaan'], 'string', 'max' => 64],
            [['id_datadiri'], 'unique'],

            //Data Anak
            // [['nama_anak', 'tempat_lahir_anak', 'id_keluarga'], 'required'],
            [['tanggal_lahir_anak', 'tanggal_baptis_anak'], 'safe'],
            [['id_keluarga'], 'integer'],
            [['nama_anak', 'tempat_lahir_anak'], 'string', 'max' => 64],

            //Data Baptis
            // [['tanggal_baptis', 'tempat_baptis', 'no_registrasi', 'dilayani_oleh', 'id_datagereja'], 'required'],
            [['tanggal_baptis'], 'safe'],
            [['no_registrasi_baptis', 'id_datagereja'], 'integer'],
            [['tempat_baptis', 'dilayani_oleh'], 'string', 'max' => 64],

            //Data Keluarga
            // [['id_datakeluarga', 'nama_istri', 'tempat_menikah', 'nama_pendeta_keluarga', 'no_registrasi_keluarga', 'status_dalam_keluarga', 'nama_ayah', 'nama_ibu', 'jumlah_anak', 'id_datadiri'], 'required'],
            [['id_datakeluarga', 'no_registrasi_keluarga', 'jumlah_anak', 'id_datadiri'], 'integer'],
            [['tanggal_pernikahan'], 'safe'],
            [['nama_istri', 'tempat_menikah', 'nama_pendeta_keluarga', 'status_dalam_keluarga', 'nama_ayah', 'nama_ibu'], 'string', 'max' => 64],

            //Data Istri
            // [['nama', 'tanggal_lahir_istri', 'tanggal_baptis_istri', 'no_registrasi_istri', 'asal_gereja_istri', 'id_keluarga'], 'required'],
            [['tanggal_lahir_istri', 'tanggal_baptis_istri', 'tanggal_sidi_istri'], 'safe'],
            [['no_baptis_istri', 'no_registrasi_istri', 'id_keluarga'], 'integer'],
            [['nama', 'asal_gereja_istri'], 'string', 'max' => 64]

        ];
    }

	public function attributeLabels(){
		return [
		//Data Diri
            'id_datadiri' => 'Id Datadiri',
            'nomor_anggota' => 'Nomor Anggota',
            'sektor' => 'Sektor',
            'nama_lengkap' => 'Nama Lengkap',
            'tempat_lahir_diri' => 'Tempat Lahir',
            'tanggal_lahir_diri' => 'Tanggal Lahir',
            'jenis_kelamin' => 'Jenis Kelamin',
            'status' => 'Status',
            'alamat_jelas' => 'Alamat Jelas',
            'golDarah' => 'Gol Darah',
            'pendidikan' => 'Pendidikan',
            'bidang_Ilmu' => 'Bidang  Ilmu',
            'spesifikasi' => 'Spesifikasi',
            'pekerjaan' => 'Pekerjaan',
            'aktivitasDiMasyarakat' => 'Aktivitas Di Masyarakat',
            'no_telp' => 'No Telpon',

        //Data Baptis
            'id_databaptis' => 'Id Databaptis',
            'tanggal_baptis' => 'Tanggal Baptis',
            'tempat_baptis' => 'Tempat Baptis',
            'no_registrasi' => 'No Registrasi',
            'dilayani_oleh' => 'Dilayani Oleh',
            'id_datagereja' => 'Id Datagereja',

        //Data Anak
            'id_anak' => 'Id Anak',
            'nama_anak' => 'Nama Anak',
            'tempat_lahir_anak' => 'Tempat Lahir',
            'tanggal_lahir_anak' => 'Tanggal Lahir',
            'tanggal_baptis_anak' => 'Tanggal Baptis',
            'id_keluarga' => 'Id Keluarga',

        //Data Gereja
            'id_datagereja' => 'Id Datagereja',
            'asal_gereja' => 'Asal Gereja',
            'aktivitas_diGereja' => 'Aktivitas Di Gereja',
            'status_keanggotaan' => 'Status Keanggotaan',
            'id_datadiri' => 'Id Datadiri',

        //Data Istri
            'id_istri' => 'Id Istri',
            'nama' => 'Nama',
            'tanggal_lahir_istri' => 'Tanggal Lahir',
            'tanggal_baptis_istri' => 'Tanggal Baptis',
            'no_baptis_istri' => 'No Baptis',
            'tanggal_sidi_istri' => 'Tanggal Sidi',
            'no_registrasi_istri' => 'No Registrasi',
            'asal_gereja_istri' => 'Asal Gereja',
            'id_keluarga' => 'Id Keluarga',


        //Data Keluarga    
            'id_datakeluarga' => 'Id Datakeluarga',
            'nama_istri' => 'Nama Istri',
            'tanggal_pernikahan' => 'Tanggal Pernikahan',
            'tempat_menikah' => 'Tempat Menikah',
            'nama_pendeta_keluarga' => 'Nama Pendeta',
            'no_registrasi_keluarga' => 'No Registrasi',
            'status_dalam_keluarga' => 'Status Dalam Keluarga',
            'nama_ayah' => 'Nama Ayah',
            'nama_ibu' => 'Nama Ibu',
            'jumlah_anak' => 'Jumlah Anak',
            'id_datadiri' => 'Id Datadiri',

        //Data Sidi
            'id_datasidi' => 'Id Datasidi',
            'id_datagereja' => 'Id Datagereja',
            'tanggal_sidi_diri' => 'Tanggal Sidi Jemaat',
            'tempat_sidi' => 'Tempat Sidi',
            'no_registrasi_sidi' => 'No Registrasi',
            'nama_pendeta' => 'Nama Pendeta',
        ];
	}

    public function register() {
        //Model
        $datadiri = new Datadiri();
    	$datagereja = new Datagereja();
    	$dataanak = new Dataanak();
    	$databaptis = new Databaptis();
    	$dataistri = new Dataistri();
    	$datakeluarga = new Datakeluarga();
    	$datasidi = new Datasidi();


        //Data Diri
    	$datadiri->nomor_anggota = $this->nomor_anggota;
    	$datadiri->sektor=$this->nomor_anggota;
    	$datadiri->nama_lengkap = $this->nama_lengkap;
    	$datadiri->tempat_lahir = $this->tempat_lahir_diri;
    	$datadiri->tanggal_lahir = $this->tanggal_lahir_diri;
    	$datadiri->jenis_kelamin = $this->jenis_kelamin;
    	$datadiri->status = $this->status;
    	$datadiri->alamat_jelas = $this->alamat_jelas;
    	$datadiri->golDarah=$this->golDarah;
    	$datadiri->pendidikan=$this->pendidikan;
    	$datadiri->bidang_Ilmu = $this->bidang_Ilmu;
    	$datadiri->spesifikasi = $this->spesifikasi;
    	$datadiri->pekerjaan = $this->pekerjaan;
    	$datadiri->aktivitasDiMasyarakat = $this->aktivitasDiMasyarakat;
        $datadiri->no_telp = $this->no_telp;
        if($datadiri->save(false)){
            //Data Gereja            
            $datagereja->asal_gereja = $this->asal_gereja;
            $datagereja->aktivitas_diGereja = $this->aktivitas_diGereja;
            $datagereja->status_keanggotaan = $this->status_keanggotaan;
            $datagereja->id_datadiri = $datadiri->id_datadiri;

            if($datagereja->save(false)){
                //Data Baptis
                $databaptis->tanggal_baptis = $this->tanggal_baptis;
                $databaptis->tempat_baptis = $this->tempat_baptis;
                $databaptis->no_registrasi = $this->no_registrasi_baptis;
                $databaptis->dilayani_oleh = $this->dilayani_oleh;
                $databaptis->id_datagereja = $datagereja->id_datagereja;

                if($databaptis->save(false)){

                //Data Sidi
                $datasidi->tanggal_sidi = $this->tanggal_sidi_diri;
                $datasidi->tempat_sidi = $this->tempat_sidi;
                $datasidi->no_registrasi = $this->no_registrasi_sidi;
                $datasidi->nama_pendeta = $this->nama_pendeta;
                $datasidi->id_datagereja = $datagereja->id_datagereja;
                // $datasidi->save();
                
                // $datasidi->id_datasidi = $datasidi->id_datasidi;

                if($datasidi->save(false)){
                    // print_r($datasidi);
                    // die();

                        //Data Keluarga
                        // $datakeluarga->id_datakeluarga = $
                        $datakeluarga->id_datadiri = $datadiri->id_datadiri;
                        $datakeluarga->nama_istri=$this->nama_istri;
                        $datakeluarga->tanggal_pernikahan=$this->tanggal_pernikahan;
                        $datakeluarga->nama_pendeta = $this->nama_pendeta_keluarga;
                        $datakeluarga->tempat_menikah =$this->tempat_menikah;
                        $datakeluarga->no_registrasi = $this->no_registrasi_keluarga;
                        $datakeluarga->status_dalam_keluarga = $this->status_dalam_keluarga;
                        $datakeluarga->nama_ayah = $this->nama_ayah;
                        $datakeluarga->nama_ibu = $this->nama_ibu;
                        $datakeluarga->jumlah_anak = $this->jumlah_anak;

                        if($datakeluarga->save(false)){
                            // print_r($datakeluarga);
                            // die();

                             //Data Istri
                            // $dataistri->id_istri = $->;

                            $this->id_datakeluarga = $datakeluarga->id_datakeluarga;
                            // echo $this->id_datakeluarga;
                            // die();

                            $dataistri->nama = $this->nama;
                            $dataistri->tanggal_lahir = $this->tanggal_lahir_istri;
                            $dataistri->tanggal_baptis = $this->tanggal_baptis_istri;
                            $dataistri->no_baptis = $this->no_baptis_istri;
                            $dataistri->tanggal_sidi = $this->tanggal_sidi_istri;
                            $dataistri->no_registrasi = $this->no_registrasi_istri;
                            $dataistri->asal_gereja = $this->asal_gereja_istri;
                            $dataistri->id_keluarga = $datakeluarga->id_datakeluarga;

                            if($dataistri->save(false)){
                                //Data Anak
                                $dataanak->nama_anak = $this->nama_anak;
                                $dataanak->tempat_lahir = $this->tempat_lahir_anak;
                                $dataanak->tanggal_lahir = $this->tanggal_lahir_anak;
                                $dataanak->tanggal_baptis = $this->tanggal_baptis_anak;
                                $dataanak->id_keluarga = $datakeluarga->id_datakeluarga;
                                // $dataistri->save();
                                $dataanak->save(false);
                            }else{
                                echo "A";
                                var_dump($dataistri);
                                print_r($dataistri->errors);
                                die();
                            }
                        }else{
                            echo "B";
                            // var_dump($datakeluarga);
                            print_r($datakeluarga->errors);
                            die();
                        }
                    }else{
                        echo "C";
                        var_dump($datasidi);
                        print_r($datasidi->errors);
                        die();
                       }
                } else{
                    echo "D";
                    var_dump($databaptis);
                    print_r($databaptis->errors);
                    die();
                }
            } else{
                echo "E";
                var_dump($datagereja);
                print_r($datagereja->errors);
                die();
                }
        } else{
                echo "F";
                var_dump($datadiri);
                print_r($datadiri->errors);
                die();   
            }
            return true;
        }
}
?>