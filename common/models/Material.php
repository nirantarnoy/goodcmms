<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "material".
 *
 * @property int $id
 * @property string $code
 * @property string $name
 * @property double $standard_cost
 * @property int $leadtime
 * @property double $min_stock
 * @property double $max_stock
 * @property double $min_order
 * @property double $max_order
 * @property int $default_warehouse
 * @property int $allow_negative
 * @property int $critical_type
 * @property int $unit
 * @property string $manufacturer
 * @property string $note
 * @property int $all_qty
 * @property double $average_cose
 * @property int $type_id
 * @property int $created_at
 */
class Material extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'material';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['standard_cost', 'min_stock', 'max_stock', 'min_order', 'max_order', 'average_cose'], 'number'],
            [['leadtime', 'default_warehouse', 'allow_negative', 'critical_type', 'unit', 'all_qty', 'type_id', 'created_at'], 'integer'],
            [['code', 'name', 'manufacturer', 'note'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'code' => 'รหัส',
            'name' => 'ชื่อ',
            'standard_cost' => 'ต้นทุน',
            'leadtime' => 'ระยะเวลาสั่งซื้อ',
            'min_stock' => 'Stock ขั้นต่ำ',
            'max_stock' => 'Stock สูงสุด',
            'min_order' => 'Order ขั้นต่ำ',
            'max_order' => 'Order สูงสุด',
            'default_warehouse' => 'สโตร์หลัก',
            'allow_negative' => 'ยอมติดลบ',
            'critical_type' => 'ระดับความรุนแรง',
            'unit' => 'หน่วยนับ',
            'manufacturer' => 'ผู้ผลิต',
            'note' => 'หมายเหตุ',
            'all_qty' => 'จำนวนคงเหลือ',
            'average_cose' => 'ต้นทุนเฉลี่ย',
            'type_id' => 'ประเภท',
            'created_at' => 'Created At',
//            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }
}
