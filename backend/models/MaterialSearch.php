<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Material;

/**
 * MaterialSearch represents the model behind the search form of `backend\models\Material`.
 */
class MaterialSearch extends Material
{
    /**
     * {@inheritdoc}
     */

    public $globalSearch;
    public function rules()
    {
        return [
            [['id', 'leadtime', 'default_warehouse', 'allow_negative', 'critical_type', 'unit', 'all_qty', 'type_id', 'created_at'], 'integer'],
            [['code', 'name', 'manufacturer', 'note'], 'safe'],
            [['standard_cost', 'min_stock', 'max_stock', 'min_order', 'max_order', 'average_cose'], 'number'],
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
        $query = Material::find();

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
//            'standard_cost' => $this->standard_cost,
//            'leadtime' => $this->leadtime,
//            'min_stock' => $this->min_stock,
//            'max_stock' => $this->max_stock,
//            'min_order' => $this->min_order,
//            'max_order' => $this->max_order,
//            'default_warehouse' => $this->default_warehouse,
//            'allow_negative' => $this->allow_negative,
//            'critical_type' => $this->critical_type,
//            'unit' => $this->unit,
//            'all_qty' => $this->all_qty,
//            'average_cose' => $this->average_cose,
//            'type_id' => $this->type_id,
//            'created_at' => $this->created_at,
//        ]);

        $query->orFilterWhere(['like', 'code', $this->globalSearch])
            ->orFilterWhere(['like', 'name', $this->globalSearch])
            ->orFilterWhere(['like', 'manufacturer', $this->globalSearch])
            ->orFilterWhere(['like', 'note', $this->globalSearch]);

        return $dataProvider;
    }
}
