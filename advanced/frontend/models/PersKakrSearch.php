<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PersKakr;

/**
 * PersKakrSearch represents the model behind the search form about `frontend\models\PersKakr`.
 */
class PersKakrSearch extends PersKakr
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_kakr', 'jumlah_hadirAK', 'jumlah_hadirAT', 'jumlah_hadirR', 'id_mingguan'], 'integer'],
            [['tanggal', 'ket'], 'safe'],
            [['anak_kecil', 'anak_tanggung', 'anak_remaja'], 'number'],
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
        $query = PersKakr::find();

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
            'id_kakr' => $this->id_kakr,
            'tanggal' => $this->tanggal,
            'anak_kecil' => $this->anak_kecil,
            'jumlah_hadirAK' => $this->jumlah_hadirAK,
            'anak_tanggung' => $this->anak_tanggung,
            'jumlah_hadirAT' => $this->jumlah_hadirAT,
            'anak_remaja' => $this->anak_remaja,
            'jumlah_hadirR' => $this->jumlah_hadirR,
            'id_mingguan' => $this->id_mingguan,
        ]);

        $query->andFilterWhere(['like', 'ket', $this->ket]);

        return $dataProvider;
    }
}
