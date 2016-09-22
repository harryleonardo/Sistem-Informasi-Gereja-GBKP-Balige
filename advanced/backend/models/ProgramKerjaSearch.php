<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\ProgramKerja;

/**
 * ProgramKerjaSearch represents the model behind the search form about `backend\models\ProgramKerja`.
 */
class ProgramKerjaSearch extends ProgramKerja
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_program'], 'integer'],
            [['nama_program', 'status', 'Ket'], 'safe'],
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
        $query = ProgramKerja::find();

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
            'id_program' => $this->id_program,
        ]);

        $query->andFilterWhere(['like', 'nama_program', $this->nama_program])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'Ket', $this->Ket]);

        return $dataProvider;
    }
}
