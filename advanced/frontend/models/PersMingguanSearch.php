<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PersMingguan;

/**
 * PersMingguanSearch represents the model behind the search form about `frontend\models\PersMingguan`.
 */
class PersMingguanSearch extends PersMingguan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_mingguan', 'jumlah_lk', 'jumlah_pr', 'id_kegiatan'], 'integer'],
            [['tanggal', 'ket'], 'safe'],
            [['pers1', 'pers2', 'pers3', 'total', 'pers_kakr'], 'number'],
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
        $query = PersMingguan::find();

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
            'id_mingguan' => $this->id_mingguan,
            'tanggal' => $this->tanggal,
            'jumlah_lk' => $this->jumlah_lk,
            'jumlah_pr' => $this->jumlah_pr,
            'pers1' => $this->pers1,
            'pers2' => $this->pers2,
            'pers3' => $this->pers3,
            'total' => $this->total,
            'pers_kakr' => $this->pers_kakr,
            'id_kegiatan' => $this->id_kegiatan,
        ]);

        $query->andFilterWhere(['like', 'ket', $this->ket]);

        return $dataProvider;
    }
}
