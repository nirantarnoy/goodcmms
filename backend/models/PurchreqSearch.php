<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Purchreq;

/**
 * PurchreqSearch represents the model behind the search form of `backend\models\Purchreq`.
 */
class PurchreqSearch extends Purchreq
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'workorder_id', 'priority', 'request_by', 'approve_by', 'status', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['purchreq_no', 'purchreq_date', 'require_date', 'purchreq_reason', 'workorder_list', 'approve_date', 'approve_desc'], 'safe'],
            [['totalamount'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Purchreq::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'purchreq_date' => $this->purchreq_date,
            'require_date' => $this->require_date,
            'workorder_id' => $this->workorder_id,
            'priority' => $this->priority,
            'totalamount' => $this->totalamount,
            'request_by' => $this->request_by,
            'approve_by' => $this->approve_by,
            'approve_date' => $this->approve_date,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
        ]);

        $query->andFilterWhere(['like', 'purchreq_no', $this->purchreq_no])
            ->andFilterWhere(['like', 'purchreq_reason', $this->purchreq_reason])
            ->andFilterWhere(['like', 'workorder_list', $this->workorder_list])
            ->andFilterWhere(['like', 'approve_desc', $this->approve_desc]);

        return $dataProvider;
    }
}
