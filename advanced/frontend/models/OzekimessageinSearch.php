<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Ozekimessagein;

/**
 * OzekimessageinSearch represents the model behind the search form about `frontend\models\Ozekimessagein`.
 */
class OzekimessageinSearch extends Ozekimessagein
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['sender', 'receiver', 'msg', 'senttime', 'receivedtime', 'operator', 'msgtype', 'reference'], 'safe'],
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
        $query = Ozekimessagein::find();

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
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'sender', $this->sender])
            ->andFilterWhere(['like', 'receiver', $this->receiver])
            ->andFilterWhere(['like', 'msg', $this->msg])
            ->andFilterWhere(['like', 'senttime', $this->senttime])
            ->andFilterWhere(['like', 'receivedtime', $this->receivedtime])
            ->andFilterWhere(['like', 'operator', $this->operator])
            ->andFilterWhere(['like', 'msgtype', $this->msgtype])
            ->andFilterWhere(['like', 'reference', $this->reference]);

        return $dataProvider;
    }
}
