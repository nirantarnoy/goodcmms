<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "asset".
 *
 * @property int $id
 * @property string $asset_no
 * @property string $asset_name
 * @property string $description
 * @property int $asset_group_id
 * @property int $site_id
 * @property int $department_id
 * @property int $section_id
 * @property int $asset_location_id
 * @property int $critical
 * @property string $manufacturer
 * @property string $brand
 * @property string $asset_model
 * @property int $asset_cat_id
 * @property int $asset_status
 * @property int $responsible
 * @property string $note
 * @property int $created_at
 * @property int $updated_at
 * @property int $created_by
 * @property int $updated_by
 */
class Asset extends \yii\db\ActiveRecord
{
    public $photo;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'asset';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['asset_name','asset_group_id'],'required'],
            [['asset_group_id', 'site_id', 'department_id', 'section_id', 'asset_location_id', 'critical', 'asset_cat_id', 'asset_status', 'responsible', 'created_at', 'updated_at', 'created_by', 'updated_by','warranty_month_qty','warranty_year_qty'], 'integer'],
            [['asset_no', 'asset_name', 'description', 'manufacturer', 'brand', 'asset_model', 'note','asset_serial_no'], 'string', 'max' => 255],
            [['asset_recieve_date','exp_warranty_date'],'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'asset_no' => 'รหัส',
            'asset_name' => 'ชื่อ',
            'description' => 'รายละเอียด',
            'asset_group_id' => 'กลุ่ม',
            'site_id' => 'สถานประกอบการ',
            'department_id' => 'ฝ่าย',
            'section_id' => 'แผนก',
            'asset_location_id' => 'ที่ตั้ง',
            'critical' => 'ระดับความสำคัญ',
            'manufacturer' => 'ผู้ผลิต',
            'brand' => 'ยี่ห้อ',
            'asset_model' => 'โมเดล',
            'asset_cat_id' => 'ประเภท',
            'asset_status' => 'สถานะ',
            'responsible' => 'ผู้รับผิดชอบ',
            'note' => 'บันทึกอื่นๆ',
            'asset_serial_no'=>'Serial No',
            'created_at' => 'สร้างเมื่อ',
            'asset_recieve_date'=>'วันที่รับเข้าระบบ',
            'warranty_month_qty' => 'จำนวนประกัน(เดือน)',
            'exp_warranty_date' => 'วันที่หมดประกัน',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }
}
