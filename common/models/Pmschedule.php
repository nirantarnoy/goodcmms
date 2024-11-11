<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "pmshedule".
 *
 * @property int $id
 * @property int $asset_id
 * @property int $pm_type
 * @property int $pm_for
 * @property int $worktrade_id
 * @property int $worktype_id
 * @property int $suplier_id
 * @property int $pm_location_id
 * @property int $pm_section_id
 * @property int $pm_department_id
 * @property int $generate_type
 * @property int $task_id
 * @property int $frequency_unit
 * @property int $frequency
 * @property int $days
 * @property int $period_day
 * @property int $target_start
 * @property int $target_end
 * @property int $next_target_start
 * @property int $status
 * @property string $note
 * @property int $created_at
 * @property int $updated_at
 * @property int $created_by
 * @property int $updated_by
 */
class Pmschedule extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pmschedule';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['asset_id','pm_no'],'required'],
            [['asset_id', 'pm_type', 'pm_for', 'worktrade_id', 'worktype_id', 'suplier_id', 'pm_location_id', 'pm_section_id', 'pm_department_id', 'generate_type', 'task_id', 'frequency_unit', 'frequency', 'days', 'period_day', 'target_start', 'target_end', 'next_target_start', 'status', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['note','pm_no'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'asset_id' => 'รหัสเครื่องจักร์/อุปกรณ์',
            'pm_type' => 'ประเภทแผน',
            'pm_no' => 'เลขที่แผน',
            'pm_for' => 'Pm For',
            'worktrade_id' => 'หน่วยงานรับผิดชอบ',
            'worktype_id' => 'ประเภทงาน',
            'suplier_id' => 'ผู้ขายหรือผู้รับเหมา',
            'pm_location_id' => 'ที่ตั้ง',
            'pm_section_id' => 'แผนก',
            'pm_department_id' => 'ฝ่าย',
            'generate_type' => 'Generate Type',
            'task_id' => 'เลขที่งาน',
            'frequency_unit' => 'ความถี่เป็นหน่วย',
            'frequency' => 'ความถี่',
            'days' => 'จำนวนวัน',
            'period_day' => 'ต้องใช้เวลา',
            'target_start' => 'เริ่มวันที่',
            'target_end' => 'จบวันที่',
            'next_target_start' => 'วันที่เริ่มครั้งต่อไป',
            'status' => 'สถานะ',
            'note' => 'บันทึก',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }
}
