<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Datadiri;

/**
 * DatadiriSearch represents the model behind the search form about `backend\models\Datadiri`.
 */
class DatadiriSearch extends Datadiri
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_datadiri', 'nomor_anggota'], 'integer'],
            [['sektor', 'nama_lengkap', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'status', 'alamat_jelas', 'golDarah', 'pendidikan', 'bidang_Ilmu', 'spesifikasi', 'pekerjaan', 'aktivitasDiMasyarakat', 'no_telp'], 'safe'],
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
        $query = Datadiri::find();

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
            'id_datadiri' => $this->id_datadiri,
            'nomor_anggota' => $this->nomor_anggota,
            'tanggal_lahir' => $this->tanggal_lahir,
        ]);

        $query->andFilterWhere(['like', 'sektor', $this->sektor])
            ->andFilterWhere(['like', 'nama_lengkap', $this->nama_lengkap])
            ->andFilterWhere(['like', 'tempat_lahir', $this->tempat_lahir])
            ->andFilterWhere(['like', 'jenis_kelamin', $this->jenis_kelamin])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'alamat_jelas', $this->alamat_jelas])
            ->andFilterWhere(['like', 'golDarah', $this->golDarah])
            ->andFilterWhere(['like', 'pendidikan', $this->pendidikan])
            ->andFilterWhere(['like', 'bidang_Ilmu', $this->bidang_Ilmu])
            ->andFilterWhere(['like', 'spesifikasi', $this->spesifikasi])
            ->andFilterWhere(['like', 'pekerjaan', $this->pekerjaan])
            ->andFilterWhere(['like', 'aktivitasDiMasyarakat', $this->aktivitasDiMasyarakat])
            ->andFilterWhere(['like', 'no_telp', $this->no_telp]);

        return $dataProvider;
    }
}
