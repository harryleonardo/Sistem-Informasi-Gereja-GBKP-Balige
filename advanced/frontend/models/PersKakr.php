<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pers_kakr".
 *
 * @property integer $id_kakr
 * @property string $tanggal
 * @property double $anak_kecil
 * @property integer $jumlah_hadirAK
 * @property double $anak_tanggung
 * @property integer $jumlah_hadirAT
 * @property double $anak_remaja
 * @property integer $jumlah_hadirR
 * @property string $ket
 * @property integer $id_mingguan
 *
 * @property PersMingguan $idMingguan
 */
class PersKakr extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pers_kakr';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_kakr', 'tanggal', 'anak_kecil', 'jumlah_hadirAK', 'anak_tanggung', 'jumlah_hadirAT', 'anak_remaja', 'jumlah_hadirR', 'ket', 'id_mingguan'], 'required'],
            [['id_kakr', 'jumlah_hadirAK', 'jumlah_hadirAT', 'jumlah_hadirR', 'id_mingguan'], 'integer'],
            [['tanggal'], 'safe'],
            [['anak_kecil', 'anak_tanggung', 'anak_remaja'], 'number'],
            [['ket'], 'string', 'max' => 64]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_kakr' => 'Id Kakr',
            'tanggal' => 'Tanggal',
            'anak_kecil' => 'Anak Kecil',
            'jumlah_hadirAK' => 'Jumlah Hadir Ak',
            'anak_tanggung' => 'Anak Tanggung',
            'jumlah_hadirAT' => 'Jumlah Hadir At',
            'anak_remaja' => 'Anak Remaja',
            'jumlah_hadirR' => 'Jumlah Hadir R',
            'ket' => 'Ket',
            'id_mingguan' => 'Id Mingguan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdMingguan()
    {
        return $this->hasOne(PersMingguan::className(), ['id_mingguan' => 'id_mingguan']);
    }
}
