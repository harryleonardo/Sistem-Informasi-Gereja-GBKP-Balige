<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Databaptis;

/**
 * DatabaptisSearch represents the model behind the search form about `frontend\models\Databaptis`.
 */
class DatabaptisSearch extends Databaptis
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_databaptis', 'no_registrasi', 'id_datagereja'], 'integer'],
            [['tanggal_baptis', 'tempat_baptis', 'dilayani_oleh'], 'safe'],
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
        $query = Databaptis::find();

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
            'id_databaptis' => $this->id_databaptis,
            'tanggal_baptis' => $this->tanggal_baptis,
            'no_registrasi' => $this->no_registrasi,
            'id_datagereja' => $this->id_datagereja,
        ]);

        $query->andFilterWhere(['like', 'tempat_baptis', $this->tempat_baptis])
            ->andFilterWhere(['like', 'dilayani_oleh', $this->dilayani_oleh]);

        return $dataProvider;
    }
}
