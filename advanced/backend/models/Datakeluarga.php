<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "datakeluarga".
 *
 * @property integer $id_datakeluarga
 * @property string $nama_istri
 * @property string $tanggal_pernikahan
 * @property string $tempat_menikah
 * @property string $nama_pendeta
 * @property integer $no_registrasi
 * @property string $status_dalam_keluarga
 * @property string $nama_ayah
 * @property string $nama_ibu
 * @property integer $jumlah_anak
 * @property integer $id_datadiri
 *
 * @property Dataanak[] $dataanaks
 * @property Dataistri[] $dataistris
 * @property Datadiri $idDatadiri
 */
class Datakeluarga extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'datakeluarga';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // [['id_datakeluarga', 'nama_istri', 'tempat_menikah', 'nama_pendeta', 'no_registrasi', 'status_dalam_keluarga', 'nama_ayah', 'nama_ibu', 'jumlah_anak', 'id_datadiri'], 'required'],
            [['id_datakeluarga', 'no_registrasi', 'jumlah_anak', 'id_datadiri'], 'integer'],
            [['tanggal_pernikahan'], 'safe'],
            [['nama_istri', 'tempat_menikah', 'nama_pendeta', 'status_dalam_keluarga', 'nama_ayah', 'nama_ibu'], 'string', 'max' => 64]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_datakeluarga' => 'Id Datakeluarga',
            'nama_istri' => 'Nama Istri',
            'tanggal_pernikahan' => 'Tanggal Pernikahan',
            'tempat_menikah' => 'Tempat Menikah',
            'nama_pendeta' => 'Nama Pendeta',
            'no_registrasi' => 'No Registrasi',
            'status_dalam_keluarga' => 'Status Dalam Keluarga',
            'nama_ayah' => 'Nama Ayah',
            'nama_ibu' => 'Nama Ibu',
            'jumlah_anak' => 'Jumlah Anak',
            'id_datadiri' => 'Id Datadiri',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDataanaks()
    {
        return $this->hasMany(Dataanak::className(), ['id_keluarga' => 'id_datakeluarga']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDataistris()
    {
        return $this->hasMany(Dataistri::className(), ['id_keluarga' => 'id_datakeluarga']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdDatadiri()
    {
        return $this->hasOne(Datadiri::className(), ['id_datadiri' => 'id_datadiri']);
    }
}
