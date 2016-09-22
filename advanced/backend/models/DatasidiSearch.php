<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Datasidi;

/**
 * DatasidiSearch represents the model behind the search form about `backend\models\Datasidi`.
 */
class DatasidiSearch extends Datasidi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_datasidi', 'id_datagereja', 'no_registrasi'], 'integer'],
            [['tanggal_sidi', 'tempat_sidi', 'nama_pendeta'], 'safe'],
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
        $query = Datasidi::find();

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
            'id_datasidi' => $this->id_datasidi,
            'id_datagereja' => $this->id_datagereja,
            'tanggal_sidi' => $this->tanggal_sidi,
            'no_registrasi' => $this->no_registrasi,
        ]);

        $query->andFilterWhere(['like', 'tempat_sidi', $this->tempat_sidi])
            ->andFilterWhere(['like', 'nama_pendeta', $this->nama_pendeta]);

        return $dataProvider;
    }
}
