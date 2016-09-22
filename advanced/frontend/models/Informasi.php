<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "informasi".
 *
 * @property integer $id_informasi
 * @property string $judul
 * @property string $tanggal
 * @property string $deskripsi
 * @property integer $id
 *
 * @property Ozekimessagein $id0
 */
class Informasi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'informasi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_informasi', 'tanggal'], 'required'],
            [['id_informasi', 'id'], 'integer'],
            [['tanggal'], 'safe'],
            [['judul', 'deskripsi'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_informasi' => 'Id Informasi',
            'judul' => 'Judul',
            'tanggal' => 'Tanggal',
            'deskripsi' => 'Deskripsi',
            'id' => 'ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(Ozekimessagein::className(), ['id' => 'id']);
    }
}
