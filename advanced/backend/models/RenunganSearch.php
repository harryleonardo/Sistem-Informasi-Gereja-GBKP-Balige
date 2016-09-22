<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Renungan;

/**
 * RenunganSearch represents the model behind the search form about `backend\models\Renungan`.
 */
class RenunganSearch extends Renungan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_renungan'], 'integer'],
            [['judul', 'penulis', 'detail'], 'safe'],
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
        $query = Renungan::find();

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
            'id_renungan' => $this->id_renungan,
        ]);

        $query->andFilterWhere(['like', 'judul', $this->judul])
            ->andFilterWhere(['like', 'penulis', $this->penulis])
            ->andFilterWhere(['like', 'detail', $this->detail]);

        return $dataProvider;
    }
}
