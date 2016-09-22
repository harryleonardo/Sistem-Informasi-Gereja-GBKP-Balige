<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "program_kerja".
 *
 * @property integer $id_program
 * @property string $nama_program
 * @property string $status
 * @property string $Ket
 */
class ProgramKerja extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'program_kerja';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_program', 'Ket'], 'string', 'max' => 255],
            [['status'], 'string', 'max' => 25]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_program' => 'Id Program',
            'nama_program' => 'Nama Program',
            'status' => 'Status',
            'Ket' => 'Ket',
        ];
    }
}
