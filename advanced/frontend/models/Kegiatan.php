<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "kegiatan".
 *
 * @property integer $id_kegiatan
 * @property string $tanggal
 * @property integer $jumlah_hadir
 * @property double $total
 * @property string $jenis_kegiatan
 *
 * @property PersMingguan[] $persMingguans
 * @property PersPersonal[] $persPersonals
 * @property PersPjj[] $persPjjs
 */
class Kegiatan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kegiatan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tanggal', 'jumlah_hadir', 'total', 'jenis_kegiatan'], 'required'],
            [['tanggal'], 'safe'],
            [['jumlah_hadir'], 'integer'],
            [['total'], 'number'],
            [['jenis_kegiatan'], 'string', 'max' => 64]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_kegiatan' => 'Id Kegiatan',
            'tanggal' => 'Tanggal',
            'jumlah_hadir' => 'Jumlah Hadir',
            'total' => 'Total',
            'jenis_kegiatan' => 'Jenis Kegiatan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersMingguans()
    {
        return $this->hasMany(PersMingguan::className(), ['id_kegiatan' => 'id_kegiatan']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersPersonals()
    {
        return $this->hasMany(PersPersonal::className(), ['id_kegiatan' => 'id_kegiatan']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersPjjs()
    {
        return $this->hasMany(PersPjj::className(), ['id_kegiatan' => 'id_kegiatan']);
    }
}
