<?php
namespace backend\models;

use Yii;
use backend\models\Informasi;
use backend\models\Ozekimessagein;
use yii\base\Model;
use yii\helpers\Html;
use yii\web\Response;

class InformasiSMS extends Model{
	//Informasi
	public $id_informasi;
	public $tanggal;
	public $judul;
	public $deskripsi;

	//SMS Masuk
	public $msg;
	public $sender;
	public $receiver;
	public $senttime;
	public $receivedtime;
	public $operator;
	public $reference;
	public $msgtype;

	public function rules()
    {
        return [
            [['id_informasi', 'tanggal'], 'required'],
            [['id_informasi', 'id'], 'integer'],
            [['tanggal'], 'safe'],
            [['judul', 'deskripsi'], 'string', 'max' => 30],


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
        	//Informasi
            'id_informasi' => 'Id Informasi',
            'judul' => 'Judul',
            'tanggal' => 'Tanggal',
            'deskripsi' => 'Deskripsi',
            'id' => 'ID',

            //Ozeki Message In
            'id' => 'ID',
            'sender' => 'Sender',
            'receiver' => 'Receiver',
            'msg' => 'Msg',
            'senttime' => 'Senttime',
            'receivedtime' => 'Receivedtime',
            'operator' => 'Operator',
            'msgtype' => 'Msgtype',
            'reference' => 'Reference'
    }
} 
?>