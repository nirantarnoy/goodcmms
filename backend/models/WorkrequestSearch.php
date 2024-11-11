<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Workrequest;

/**
 * WorkrequestSearch represents the model behind the search form of `backend\models\Workrequest`.
 */
class WorkrequestSearch extends Workrequest
{
    /**
     * {@inheritdoc}
     */

    public $globalSearch;
    public function rules()
    {
        return [
            [['id', 'work_type', 'priority', 'site_id', 'department_id', 'section_id', 'asset_location_id', 'asset_id', 'is_approve', 'approve_by', 'workorder_id', 'request_by', 'review_by', 'assign_user', 'status', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['workreq_no', 'workreq_date', 'problem_desc', 'note', 'approve_date', 'approve_reason'], 'safe'],
            [['globalSearch'], 'string'],
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
        $query = Workrequest::find();

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
//        $query->andFilterWhere([
//            'id' => $this->id,
//            'workreq_date' => $this->workreq_date,
//            'work_type' => $this->work_type,
//            'priority' => $this->priority,
//            'site_id' => $this->site_id,
//            'department_id' => $this->department_id,
//            'section_id' => $this->section_id,
//            'asset_location_id' => $this->asset_location_id,
//            'asset_id' => $this->asset_id,
//            'is_approve' => $this->is_approve,
//            'approve_by' => $this->approve_by,
//            'approve_date' => $this->approve_date,
//            'workorder_id' => $this->workorder_id,
//            'request_by' => $this->request_by,
//            'review_by' => $this->review_by,
//            'assign_user' => $this->assign_user,
//            'status' => $this->status,
//            'created_at' => $this->created_at,
//            'updated_at' => $this->updated_at,
//            'created_by' => $this->created_by,
//            'updated_by' => $this->updated_by,
//        ]);

        $query->orFilterWhere(['like', 'workreq_no', $this->globalSearch])
            ->orFilterWhere(['like', 'problem_desc', $this->globalSearch])
            ->orFilterWhere(['like', 'note', $this->globalSearch])
            ->orFilterWhere(['like', 'approve_reason', $this->globalSearch]);

        return $dataProvider;
    }
}
