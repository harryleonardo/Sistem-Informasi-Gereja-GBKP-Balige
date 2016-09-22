<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Datagereja;

/**
 * DatagerejaSearch represents the model behind the search form about `backend\models\Datagereja`.
 */
class DatagerejaSearch extends Datagereja
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_datagereja', 'id_datadiri'], 'integer'],
            [['asal_gereja', 'aktivitas_diGereja', 'status_keanggotaan'], 'safe'],
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
        $query = Datagereja::find();

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
            'id_datagereja' => $this->id_datagereja,
            'id_datadiri' => $this->id_datadiri,
        ]);

        $query->andFilterWhere(['like', 'asal_gereja', $this->asal_gereja])
            ->andFilterWhere(['like', 'aktivitas_diGereja', $this->aktivitas_diGereja])
            ->andFilterWhere(['like', 'status_keanggotaan', $this->status_keanggotaan]);

        return $dataProvider;
    }
}
