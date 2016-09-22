<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pers_personal".
 *
 * @property integer $id_personal
 * @property string $nama
 * @property string $jenis_pers
 * @property double $jumlah
 * @property string $pos
 * @property integer $id_kegiatan
 *
 * @property Kegiatan $idKegiatan
 */
class PersPersonal extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pers_personal';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // [['nama', 'jenis_pers', 'jumlah', 'pos'], 'required'],
            [['jumlah'], 'number'],
            [['id_kegiatan'], 'integer'],
            [['nama', 'jenis_pers', 'pos'], 'string', 'max' => 64]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_personal' => 'Id Personal',
            'nama' => 'Nama',
            'jenis_pers' => 'Jenis Pers',
            'jumlah' => 'Jumlah',
            'pos' => 'Pos',
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
