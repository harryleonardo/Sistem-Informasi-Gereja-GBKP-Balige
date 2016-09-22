<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "databaptis".
 *
 * @property integer $id_databaptis
 * @property string $tanggal_baptis
 * @property string $tempat_baptis
 * @property integer $no_registrasi
 * @property string $dilayani_oleh
 * @property integer $id_datagereja
 *
 * @property Datagereja $idDatagereja
 */
class Databaptis extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'databaptis';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tanggal_baptis', 'tempat_baptis', 'no_registrasi', 'dilayani_oleh', 'id_datagereja'], 'required'],
            [['tanggal_baptis'], 'safe'],
            [['no_registrasi', 'id_datagereja'], 'integer'],
            [['tempat_baptis', 'dilayani_oleh'], 'string', 'max' => 64]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_databaptis' => 'Id Databaptis',
            'tanggal_baptis' => 'Tanggal Baptis',
            'tempat_baptis' => 'Tempat Baptis',
            'no_registrasi' => 'No Registrasi',
            'dilayani_oleh' => 'Dilayani Oleh',
            'id_datagereja' => 'Id Datagereja',
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
