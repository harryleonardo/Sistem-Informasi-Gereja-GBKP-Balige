<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\JadwalIbadah;

/**
 * JadwalIbadahSearch represents the model behind the search form about `backend\models\JadwalIbadah`.
 */
class JadwalIbadahSearch extends JadwalIbadah
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_jadwal'], 'integer'],
            [['hari_tanggal', 'jenis_minggu', 'Bahasa', 'ket'], 'safe'],
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
        $query = JadwalIbadah::find();

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
            'id_jadwal' => $this->id_jadwal,
            'hari_tanggal' => $this->hari_tanggal,
        ]);

        $query->andFilterWhere(['like', 'jenis_minggu', $this->jenis_minggu])
            ->andFilterWhere(['like', 'Bahasa', $this->Bahasa])
            ->andFilterWhere(['like', 'ket', $this->ket]);

        return $dataProvider;
    }
}
