<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pers_pjj".
 *
 * @property integer $id_pjj
 * @property string $tanggal
 * @property integer $jumlah_hadir
 * @property integer $sektor
 * @property double $total
 * @property string $tempat_pjj
 * @property string $pjj_selanjutnya
 * @property integer $id_kegiatan
 *
 * @property Kegiatan $idKegiatan
 */
class PersPjj extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pers_pjj';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tanggal', 'jumlah_hadir', 'sektor', 'total', 'tempat_pjj', 'pjj_selanjutnya', 'id_kegiatan'], 'required'],
            [['tanggal'], 'safe'],
            [['jumlah_hadir', 'sektor', 'id_kegiatan'], 'integer'],
            [['total'], 'number'],
            [['tempat_pjj', 'pjj_selanjutnya'], 'string', 'max' => 64]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_pjj' => 'Id Pjj',
            'tanggal' => 'Tanggal',
            'jumlah_hadir' => 'Jumlah Hadir',
            'sektor' => 'Sektor',
            'total' => 'Total',
            'tempat_pjj' => 'Tempat Pjj',
            'pjj_selanjutnya' => 'Pjj Selanjutnya',
            'id_kegiatan' => 'Id Kegiatan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdKegiatan()
    {
        return $this->hasOne(Kegiatan::className(), ['id_kegiatan' => 'id_kegiatan']);
    }
}
