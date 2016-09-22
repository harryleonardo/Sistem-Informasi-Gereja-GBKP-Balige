<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "datagereja".
 *
 * @property integer $id_datagereja
 * @property string $asal_gereja
 * @property string $aktivitas_diGereja
 * @property string $status_keanggotaan
 * @property integer $id_datadiri
 *
 * @property Databaptis[] $databaptis
 * @property Datadiri $idDatadiri
 * @property Datasidi[] $datasidis
 */
class Datagereja extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'datagereja';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['asal_gereja', 'aktivitas_diGereja', 'status_keanggotaan', 'id_datadiri'], 'required'],
            [['id_datadiri'], 'integer'],
            [['asal_gereja', 'aktivitas_diGereja', 'status_keanggotaan'], 'string', 'max' => 64],
            [['id_datadiri'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_datagereja' => 'Id Datagereja',
            'asal_gereja' => 'Asal Gereja',
            'aktivitas_diGereja' => 'Aktivitas Di Gereja',
            'status_keanggotaan' => 'Status Keanggotaan',
            'id_datadiri' => 'Id Datadiri',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDatabaptis()
    {
        return $this->hasMany(Databaptis::className(), ['id_datagereja' => 'id_datagereja']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdDatadiri()
    {
        return $this->hasOne(Datadiri::className(), ['id_datadiri' => 'id_datadiri']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDatasidis()
    {
        return $this->hasMany(Datasidi::className(), ['id_datagereja' => 'id_datagereja']);
    }
}
