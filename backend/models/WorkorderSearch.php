<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Workorder;

/**
 * WorkorderSearch represents the model behind the search form of `backend\models\Workorder`.
 */
class WorkorderSearch extends Workorder
{
    /**
     * {@inheritdoc}
     */

    public $globalSearch;
    public function rules()
    {
        return [
            [['id', 'work_type', 'worktrade_id', 'suplier_id', 'workreq_id', 'asset_id', 'failure', 'next_target_pm', 'critical', 'pm_ref', 'emp_admin', 'workorder_status', 'approve_by', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['workorder_no', 'workorder_date', 'require_date', 'problem_desc', 'estimate_start', 'estimate_end', 'actual_start', 'actual_end', 'handover_date', 'problem_action', 'note', 'approve_date', 'approve_reason'], 'safe'],
            [['downtime', 'cost'], 'number'],
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
        $query = Workorder::find();

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
//            'workorder_date' => $this->workorder_date,
//            'work_type' => $this->work_type,
//            'worktrade_id' => $this->worktrade_id,
//            'suplier_id' => $this->suplier_id,
//            'require_date' => $this->require_date,
//            'workreq_id' => $this->workreq_id,
//            'asset_id' => $this->asset_id,
//            'estimate_start' => $this->estimate_start,
//            'estimate_end' => $this->estimate_end,
//            'actual_start' => $this->actual_start,
//            'actual_end' => $this->actual_end,
//            'handover_date' => $this->handover_date,
//            'downtime' => $this->downtime,
//            'cost' => $this->cost,
//            'failure' => $this->failure,
//            'next_target_pm' => $this->next_target_pm,
//            'critical' => $this->critical,
//            'pm_ref' => $this->pm_ref,
//            'emp_admin' => $this->emp_admin,
//            'workorder_status' => $this->workorder_status,
//            'approve_by' => $this->approve_by,
//            'approve_date' => $this->approve_date,
//            'created_at' => $this->created_at,
//            'updated_at' => $this->updated_at,
//            'created_by' => $this->created_by,
//            'updated_by' => $this->updated_by,
//        ]);

        $query->orFilterWhere(['like', 'workorder_no', $this->globalSearch])
            ->orFilterWhere(['like', 'problem_desc', $this->globalSearch])
            ->orFilterWhere(['like', 'problem_action', $this->globalSearch])
            ->orFilterWhere(['like', 'note', $this->globalSearch])
            ->orFilterWhere(['like', 'approve_reason', $this->globalSearch]);

        return $dataProvider;
    }
}
