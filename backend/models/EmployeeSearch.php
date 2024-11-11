<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Employee;

/**
 * EmployeeSearch represents the model behind the search form of `backend\models\Employee`.
 */
class EmployeeSearch extends Employee
{
    /**
     * {@inheritdoc}
     */
    public $globalSearch;
    public function rules()
    {
        return [
            [['id', 'prefix', 'site_id', 'department_id', 'section_id', 'position_id', 'user_relation', 'status', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['emp_code', 'first_name', 'last_name', 'nickname', 'phone', 'email', 'note', 'photo_profile'], 'safe'],
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
        $query = Employee::find();

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
//            'prefix' => $this->prefix,
//            'site_id' => $this->site_id,
//            'department_id' => $this->department_id,
//            'section_id' => $this->section_id,
//            'position_id' => $this->position_id,
//            'user_relation' => $this->user_relation,
//            'status' => $this->status,
//            'created_at' => $this->created_at,
//            'updated_at' => $this->updated_at,
//            'created_by' => $this->created_by,
//            'updated_by' => $this->updated_by,
//        ]);

        $query->orFilterWhere(['like', 'emp_code', $this->globalSearch])
            ->orFilterWhere(['like', 'first_name', $this->globalSearch])
            ->orFilterWhere(['like', 'last_name', $this->globalSearch])
            ->orFilterWhere(['like', 'nickname', $this->globalSearch])
            ->orFilterWhere(['like', 'phone', $this->globalSearch])
            ->orFilterWhere(['like', 'email', $this->globalSearch])
            ->orFilterWhere(['like', 'note', $this->globalSearch])
            ->orFilterWhere(['like', 'photo_profile', $this->globalSearch]);

        return $dataProvider;
    }
}
