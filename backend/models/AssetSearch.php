<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Asset;

/**
 * AssetSearch represents the model behind the search form of `backend\models\Asset`.
 */
class AssetSearch extends Asset
{
    /**
     * {@inheritdoc}
     */
    public $globalSearch;

    public function rules()
    {
        return [
            [['id', 'asset_group_id', 'site_id', 'department_id', 'section_id', 'asset_location_id', 'critical', 'asset_cat_id', 'asset_status', 'responsible', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['asset_no', 'asset_name', 'description', 'manufacturer', 'brand', 'asset_model', 'note'], 'safe'],
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
        $query = Asset::find();

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
//            'asset_group_id' => $this->asset_group_id,
//            'site_id' => $this->site_id,
//            'department_id' => $this->department_id,
//            'section_id' => $this->section_id,
//            'asset_location_id' => $this->asset_location_id,
//            'critical' => $this->critical,
//            'asset_cat_id' => $this->asset_cat_id,
//            'asset_status' => $this->asset_status,
//            'responsible' => $this->responsible,
//            'created_at' => $this->created_at,
//            'updated_at' => $this->updated_at,
//            'created_by' => $this->created_by,
//            'updated_by' => $this->updated_by,
//        ]);

        $query->orFilterWhere(['like', 'asset_no', $this->globalSearch])
            ->orFilterWhere(['like', 'asset_name', $this->globalSearch])
            ->orFilterWhere(['like', 'description', $this->globalSearch])
            ->orFilterWhere(['like', 'manufacturer', $this->globalSearch])
            ->orFilterWhere(['like', 'brand', $this->globalSearch])
            ->orFilterWhere(['like', 'asset_model', $this->globalSearch])
            ->orFilterWhere(['like', 'note', $this->globalSearch]);

        return $dataProvider;
    }
}
