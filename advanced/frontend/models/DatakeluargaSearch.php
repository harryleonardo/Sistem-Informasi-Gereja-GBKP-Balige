<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Datakeluarga;

/**
 * DatakeluargaSearch represents the model behind the search form about `frontend\models\Datakeluarga`.
 */
class DatakeluargaSearch extends Datakeluarga
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_datakeluarga', 'no_registrasi', 'jumlah_anak', 'id_datadiri'], 'integer'],
            [['nama_istri', 'tanggal_pernikahan', 'tempat_menikah', 'nama_pendeta', 'status_dalam_keluarga', 'nama_ayah', 'nama_ibu'], 'safe'],
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
        $query = Datakeluarga::find();

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
            'id_datakeluarga' => $this->id_datakeluarga,
            'tanggal_pernikahan' => $this->tanggal_pernikahan,
            'no_registrasi' => $this->no_registrasi,
            'jumlah_anak' => $this->jumlah_anak,
            'id_datadiri' => $this->id_datadiri,
        ]);

        $query->andFilterWhere(['like', 'nama_istri', $this->nama_istri])
            ->andFilterWhere(['like', 'tempat_menikah', $this->tempat_menikah])
            ->andFilterWhere(['like', 'nama_pendeta', $this->nama_pendeta])
            ->andFilterWhere(['like', 'status_dalam_keluarga', $this->status_dalam_keluarga])
            ->andFilterWhere(['like', 'nama_ayah', $this->nama_ayah])
            ->andFilterWhere(['like', 'nama_ibu', $this->nama_ibu]);

        return $dataProvider;
    }
}
