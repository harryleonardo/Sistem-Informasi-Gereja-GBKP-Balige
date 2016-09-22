<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "renungan".
 *
 * @property integer $id_renungan
 * @property string $judul
 * @property string $penulis
 * @property string $detail
 */
class Renungan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'renungan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_renungan', 'judul', 'penulis', 'detail'], 'required'],
            [['id_renungan'], 'integer'],
            [['judul', 'penulis', 'detail'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_renungan' => 'Id Renungan',
            'judul' => 'Judul',
            'penulis' => 'Penulis',
            'detail' => 'Detail',
        ];
    }
}
