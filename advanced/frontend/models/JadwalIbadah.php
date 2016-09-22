<?php

namespace frontend\models;

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
            [['id_jadwal', 'hari_tanggal', 'jenis_minggu', 'Bahasa', 'ket'], 'required'],
            [['id_jadwal'], 'integer'],
            [['hari_tanggal'], 'safe'],
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
