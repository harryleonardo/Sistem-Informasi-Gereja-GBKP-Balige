<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "datadiri".
 *
 * @property integer $id_datadiri
 * @property integer $nomor_anggota
 * @property string $sektor
 * @property string $nama_lengkap
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 * @property string $jenis_kelamin
 * @property string $status
 * @property string $alamat_jelas
 * @property string $golDarah
 * @property string $pendidikan
 * @property string $bidang_Ilmu
 * @property string $spesifikasi
 * @property string $pekerjaan
 * @property string $aktivitasDiMasyarakat
 * @property string $no_telp
 *
 * @property Datagereja $datagereja
 * @property Datakeluarga[] $datakeluargas
 */
class Datadiri extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'datadiri';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nomor_anggota', 'sektor', 'nama_lengkap', 'tempat_lahir', 'jenis_kelamin', 'status', 'alamat_jelas', 'golDarah', 'pendidikan', 'bidang_Ilmu', 'spesifikasi', 'pekerjaan', 'aktivitasDiMasyarakat', 'no_telp'], 'required'],
            [['nomor_anggota'], 'integer'],
            [['tanggal_lahir'], 'safe'],
            [['sektor', 'nama_lengkap', 'tempat_lahir', 'alamat_jelas', 'pendidikan', 'bidang_Ilmu', 'spesifikasi', 'pekerjaan', 'aktivitasDiMasyarakat'], 'string', 'max' => 64],
            [['jenis_kelamin', 'golDarah'], 'string', 'max' => 10],
            [['status'], 'string', 'max' => 25],
            [['no_telp'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_datadiri' => 'Id Datadiri',
            'nomor_anggota' => 'Nomor Anggota',
            'sektor' => 'Sektor',
            'nama_lengkap' => 'Nama Lengkap',
            'tempat_lahir' => 'Tempat Lahir',
            'tanggal_lahir' => 'Tanggal Lahir',
            'jenis_kelamin' => 'Jenis Kelamin',
            'status' => 'Status',
            'alamat_jelas' => 'Alamat Jelas',
            'golDarah' => 'Gol Darah',
            'pendidikan' => 'Pendidikan',
            'bidang_Ilmu' => 'Bidang  Ilmu',
            'spesifikasi' => 'Spesifikasi',
            'pekerjaan' => 'Pekerjaan',
            'aktivitasDiMasyarakat' => 'Aktivitas Di Masyarakat',
            'no_telp' => 'No Telp',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDatagereja()
    {
        return $this->hasOne(Datagereja::className(), ['id_datadiri' => 'id_datadiri']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDatakeluargas()
    {
        return $this->hasMany(Datakeluarga::className(), ['id_datadiri' => 'id_datadiri']);
    }
}
