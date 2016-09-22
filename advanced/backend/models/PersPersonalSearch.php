<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\PersPersonal;

/**
 * PersPersonalSearch represents the model behind the search form about `backend\models\PersPersonal`.
 */
class PersPersonalSearch extends PersPersonal
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_personal', 'id_kegiatan'], 'integer'],
            [['nama', 'jenis_pers', 'pos'], 'safe'],
            [['jumlah'], 'number'],
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
        $query = PersPersonal::find();

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
            'id_personal' => $this->id_personal,
            'jumlah' => $this->jumlah,
            'id_kegiatan' => $this->id_kegiatan,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'jenis_pers', $this->jenis_pers])
            ->andFilterWhere(['like', 'pos', $this->pos]);

        return $dataProvider;
    }
}
