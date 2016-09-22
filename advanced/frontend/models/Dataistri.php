<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "dataistri".
 *
 * @property integer $id_istri
 * @property string $nama
 * @property string $tanggal_lahir
 * @property string $tanggal_baptis
 * @property integer $no_baptis
 * @property string $tanggal_sidi
 * @property integer $no_registrasi
 * @property string $asal_gereja
 * @property integer $id_keluarga
 *
 * @property Datakeluarga $idKeluarga
 */
class Dataistri extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dataistri';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'tanggal_lahir', 'tanggal_baptis', 'no_registrasi', 'asal_gereja', 'id_keluarga'], 'required'],
            [['tanggal_lahir', 'tanggal_baptis', 'tanggal_sidi'], 'safe'],
            [['no_baptis', 'no_registrasi', 'id_keluarga'], 'integer'],
            [['nama', 'asal_gereja'], 'string', 'max' => 64]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_istri' => 'Id Istri',
            'nama' => 'Nama',
            'tanggal_lahir' => 'Tanggal Lahir',
            'tanggal_baptis' => 'Tanggal Baptis',
            'no_baptis' => 'No Baptis',
            'tanggal_sidi' => 'Tanggal Sidi',
            'no_registrasi' => 'No Registrasi',
            'asal_gereja' => 'Asal Gereja',
            'id_keluarga' => 'Id Keluarga',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdKeluarga()
    {
        return $this->hasOne(Datakeluarga::className(), ['id_datakeluarga' => 'id_keluarga']);
    }
}
