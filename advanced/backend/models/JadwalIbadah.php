<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "jadwal_ibadah".
 *
 * @property integer $id_jadwal
 * @property string $hari_tanggal
 * @property string $jenis_minggu
 * @property string $Bahasa
 * @property string $ket
 */
class JadwalIbadah extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $file;
    public static function tableName()
    {
        return 'jadwal_ibadah';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hari_tanggal', 'jenis_minggu', 'Bahasa', 'ket'], 'required'],
            [['hari_tanggal'], 'safe'],
            [['file'],'file'],
            [['jenis_minggu', 'Bahasa', 'ket'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_jadwal' => 'Id Jadwal',
            'hari_tanggal' => 'Hari Tanggal',
            'jenis_minggu' => 'Jenis Minggu',
            'Bahasa' => 'Bahasa',
            'ket' => 'Ket',
        ];
    }
}
