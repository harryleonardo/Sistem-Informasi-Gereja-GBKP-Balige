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
class DateRange extends \yii\db\ActiveRecord
{
    public $tanggal_awal;
    public $tanggal_akhir;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tanggal_awal','tanggal_akhir'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tanggal_awal' => 'Tangal Awal',
            'tanggal_akhir' => 'Tanggal Akhir',
        ];
    }
}
