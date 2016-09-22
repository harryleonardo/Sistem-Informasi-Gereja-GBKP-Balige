<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Kegiatan;

/**
 * KegiatanSearch represents the model behind the search form about `backend\models\Kegiatan`.
 */
class KegiatanSearch extends Kegiatan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_kegiatan', 'jumlah_hadir'], 'integer'],
            [['tanggal', 'jenis_kegiatan'], 'safe'],
            [['total'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Kegiatan::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_kegiatan' => $this->id_kegiatan,
            'tanggal' => $this->tanggal,
            'jumlah_hadir' => $this->jumlah_hadir,
            'total' => $this->total,
        ]);

        $query->andFilterWhere(['like', 'jenis_kegiatan', $this->jenis_kegiatan]);

        return $dataProvider;
    }
}
