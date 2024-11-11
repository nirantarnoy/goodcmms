<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "asset_brand".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $description
 * @property int|null $asset_group_id
 * @property int|null $status
 * @property int|null $created_at
 * @property int|null $created_by
 * @property int|null $updated_at
 * @property int|null $udpated_by
 */
class AssetBrand extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'asset_brand';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['asset_group_id', 'status', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'integer'],
            [['name', 'description'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'ชื่อยี่ห้อ',
            'description' => 'รายละเอียด',
            'asset_group_id' => 'กลุ่มอุปกรณ์',
            'status' => 'สถานะ',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
        ];
    }
}
