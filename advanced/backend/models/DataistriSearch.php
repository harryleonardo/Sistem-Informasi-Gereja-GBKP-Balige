<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Dataistri;

/**
 * DataistriSearch represents the model behind the search form about `backend\models\Dataistri`.
 */
class DataistriSearch extends Dataistri
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_istri', 'no_baptis', 'no_registrasi', 'id_keluarga'], 'integer'],
            [['nama', 'tanggal_lahir', 'tanggal_baptis', 'tanggal_sidi', 'asal_gereja'], 'safe'],
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
        $query = Dataistri::find();

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
            'id_istri' => $this->id_istri,
            'tanggal_lahir' => $this->tanggal_lahir,
            'tanggal_baptis' => $this->tanggal_baptis,
            'no_baptis' => $this->no_baptis,
            'tanggal_sidi' => $this->tanggal_sidi,
            'no_registrasi' => $this->no_registrasi,
            'id_keluarga' => $this->id_keluarga,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'asal_gereja', $this->asal_gereja]);

        return $dataProvider;
    }
}
