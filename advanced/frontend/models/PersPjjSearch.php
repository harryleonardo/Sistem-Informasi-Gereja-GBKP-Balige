<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PersPjj;

/**
 * PersPjjSearch represents the model behind the search form about `frontend\models\PersPjj`.
 */
class PersPjjSearch extends PersPjj
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_pjj', 'jumlah_hadir', 'sektor', 'id_kegiatan'], 'integer'],
            [['tanggal', 'tempat_pjj', 'pjj_selanjutnya'], 'safe'],
            [['total'], 'number'],
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
        $query = PersPjj::find();

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
            'id_pjj' => $this->id_pjj,
            'tanggal' => $this->tanggal,
            'jumlah_hadir' => $this->jumlah_hadir,
            'sektor' => $this->sektor,
            'total' => $this->total,
            'id_kegiatan' => $this->id_kegiatan,
        ]);

        $query->andFilterWhere(['like', 'tempat_pjj', $this->tempat_pjj])
            ->andFilterWhere(['like', 'pjj_selanjutnya', $this->pjj_selanjutnya]);

        return $dataProvider;
    }
}
