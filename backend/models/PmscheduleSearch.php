<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Pmschedule;

/**
 * PmscheduleSearch represents the model behind the search form of `backend\models\Pmschedule`.
 */
class PmscheduleSearch extends Pmschedule
{
    /**
     * {@inheritdoc}
     */
    public $globalSearch;

    public function rules()
    {
        return [
            [['id', 'asset_id', 'pm_type', 'pm_for', 'worktrade_id', 'worktype_id', 'suplier_id', 'pm_location_id', 'pm_section_id', 'pm_department_id', 'generate_type', 'task_id', 'frequency_unit', 'frequency', 'days', 'period_day', 'target_start', 'target_end', 'next_target_start', 'status', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['note'], 'safe'],
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
        $query = Pmschedule::find();

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
//            'asset_id' => $this->asset_id,
//            'pm_type' => $this->pm_type,
//            'pm_for' => $this->pm_for,
//            'worktrade_id' => $this->worktrade_id,
//            'worktype_id' => $this->worktype_id,
//            'suplier_id' => $this->suplier_id,
//            'pm_location_id' => $this->pm_location_id,
//            'pm_section_id' => $this->pm_section_id,
//            'pm_department_id' => $this->pm_department_id,
//            'generate_type' => $this->generate_type,
//            'task_id' => $this->task_id,
//            'frequency_unit' => $this->frequency_unit,
//            'frequency' => $this->frequency,
//            'days' => $this->days,
//            'period_day' => $this->period_day,
//            'target_start' => $this->target_start,
//            'target_end' => $this->target_end,
//            'next_target_start' => $this->next_target_start,
//            'status' => $this->status,
//            'created_at' => $this->created_at,
//            'updated_at' => $this->updated_at,
//            'created_by' => $this->created_by,
//            'updated_by' => $this->updated_by,
//        ]);

        $query->orFilterWhere(['like', 'note', $this->globalSearch]);

        return $dataProvider;
    }
}
