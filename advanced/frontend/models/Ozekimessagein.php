<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "ozekimessagein".
 *
 * @property integer $id
 * @property string $sender
 * @property string $receiver
 * @property string $msg
 * @property string $senttime
 * @property string $receivedtime
 * @property string $operator
 * @property string $msgtype
 * @property string $reference
 */
class Ozekimessagein extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ozekimessagein';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['msg'], 'string'],
            [['sender', 'receiver'], 'string', 'max' => 30],
            [['senttime', 'receivedtime', 'operator', 'reference'], 'string', 'max' => 100],
            [['msgtype'], 'string', 'max' => 160]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sender' => 'Sender',
            'receiver' => 'Receiver',
            'msg' => 'Msg',
            'senttime' => 'Senttime',
            'receivedtime' => 'Receivedtime',
            'operator' => 'Operator',
            'msgtype' => 'Msgtype',
            'reference' => 'Reference',
        ];
    }
}
