<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Dataanak;

/**
 * DataanakSearch represents the model behind the search form about `backend\models\Dataanak`.
 */
class DataanakSearch extends Dataanak
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_anak', 'id_keluarga'], 'integer'],
            [['nama_anak', 'tempat_lahir', 'tanggal_lahir', 'tanggal_baptis'], 'safe'],
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
        $query = Dataanak::find();

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
            'id_anak' => $this->id_anak,
            'tanggal_lahir' => $this->tanggal_lahir,
            'tanggal_baptis' => $this->tanggal_baptis,
            'id_keluarga' => $this->id_keluarga,
        ]);

        $query->andFilterWhere(['like', 'nama_anak', $this->nama_anak])
            ->andFilterWhere(['like', 'tempat_lahir', $this->tempat_lahir]);

        return $dataProvider;
    }
}
