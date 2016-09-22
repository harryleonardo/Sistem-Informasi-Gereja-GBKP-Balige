<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "dataanak".
 *
 * @property integer $id_anak
 * @property string $nama_anak
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 * @property string $tanggal_baptis
 * @property integer $id_keluarga
 *
 * @property Datakeluarga $idKeluarga
 */
class Dataanak extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dataanak';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_anak', 'tempat_lahir', 'id_keluarga'], 'required'],
            [['tanggal_lahir', 'tanggal_baptis'], 'safe'],
            [['id_keluarga'], 'integer'],
            [['nama_anak', 'tempat_lahir'], 'string', 'max' => 64]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_anak' => 'Id Anak',
            'nama_anak' => 'Nama Anak',
            'tempat_lahir' => 'Tempat Lahir',
            'tanggal_lahir' => 'Tanggal Lahir',
            'tanggal_baptis' => 'Tanggal Baptis',
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
