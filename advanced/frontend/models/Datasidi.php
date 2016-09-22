<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "datasidi".
 *
 * @property integer $id_datasidi
 * @property integer $id_datagereja
 * @property string $tanggal_sidi
 * @property string $tempat_sidi
 * @property integer $no_registrasi
 * @property string $nama_pendeta
 *
 * @property Datagereja $idDatagereja
 */
class Datasidi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'datasidi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_datagereja', 'tempat_sidi', 'no_registrasi', 'nama_pendeta'], 'required'],
            [['id_datagereja', 'no_registrasi'], 'integer'],
            [['tanggal_sidi'], 'safe'],
            [['tempat_sidi', 'nama_pendeta'], 'string', 'max' => 64]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_datasidi' => 'Id Datasidi',
            'id_datagereja' => 'Id Datagereja',
            'tanggal_sidi' => 'Tanggal Sidi',
            'tempat_sidi' => 'Tempat Sidi',
            'no_registrasi' => 'No Registrasi',
            'nama_pendeta' => 'Nama Pendeta',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdDatagereja()
    {
        return $this->hasOne(Datagereja::className(), ['id_datagereja' => 'id_datagereja']);
    }
}
