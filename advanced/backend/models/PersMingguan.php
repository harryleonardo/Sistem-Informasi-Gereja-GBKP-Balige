<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pers_mingguan".
 *
 * @property integer $id_mingguan
 * @property integer $jumlah_lk
 * @property integer $jumlah_pr
 * @property double $pers1
 * @property double $pers2
 * @property double $pers3
 * @property double $total
 * @property double $pers_kakr
 * @property string $ket
 * @property integer $id_kegiatan
 *
 * @property PersKakr[] $persKakrs
 * @property Kegiatan $idKegiatan
 */
class PersMingguan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pers_mingguan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // [['jumlah_lk', 'jumlah_pr', 'pers1', 'pers2', 'pers3', 'total', 'pers_kakr', 'ket', 'id_kegiatan'], 'required'],
            [['jumlah_lk', 'jumlah_pr', 'id_kegiatan'], 'integer'],
            [['pers1', 'pers2', 'pers3', 'total', 'pers_kakr'], 'number'],
            [['ket'], 'string', 'max' => 64]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_mingguan' => 'Id Mingguan',
            'jumlah_lk' => 'Jumlah Lk',
            'jumlah_pr' => 'Jumlah Pr',
            'pers1' => 'Pers1',
            'pers2' => 'Pers2',
            'pers3' => 'Pers3',
            'total' => 'Total',
            'pers_kakr' => 'Pers Kakr',
            'ket' => 'Ket',
            'id_kegiatan' => 'Id Kegiatan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersKakrs()
    {
        return $this->hasMany(PersKakr::className(), ['id_mingguan' => 'id_mingguan']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdKegiatan()
    {
        return $this->hasOne(Kegiatan::className(), ['id_kegiatan' => 'id_kegiatan']);
    }
}
