<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "workorder".
 *
 * @property int $id
 * @property string $workorder_no
 * @property string $workorder_date
 * @property int $work_type
 * @property int $worktrade_id
 * @property int $suplier_id
 * @property string $require_date
 * @property int $workreq_id
 * @property int $asset_id
 * @property string $problem_desc
 * @property string $estimate_start
 * @property string $estimate_end
 * @property string $actual_start
 * @property string $actual_end
 * @property string $handover_date
 * @property double $downtime
 * @property double $cost
 * @property int $failure
 * @property int $next_target_pm
 * @property int $critical
 * @property string $problem_action
 * @property string $note
 * @property int $pm_ref
 * @property int $emp_admin
 * @property int $workorder_status
 * @property int $approve_by
 * @property string $approve_date
 * @property string $approve_reason
 * @property int $created_at
 * @property int $updated_at
 * @property int $created_by
 * @property int $updated_by
 */
class Workorder extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'workorder';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['workorder_no','asset_id'],'required'],
            [['workorder_date', 'require_date', 'estimate_start', 'estimate_end', 'actual_start', 'actual_end', 'handover_date', 'approve_date'], 'safe'],
            [['work_type', 'worktrade_id', 'suplier_id', 'workreq_id', 'asset_id', 'failure', 'next_target_pm', 'critical', 'pm_ref', 'emp_admin', 'workorder_status', 'approve_by', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['downtime', 'cost'], 'number'],
            [['workorder_no', 'problem_desc', 'problem_action', 'note', 'approve_reason'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'workorder_no' => 'เลขที่',
            'workorder_date' => 'วันที่',
            'work_type' => 'ประเภทงาน',
            'worktrade_id' => 'หน่วยงาน',
            'suplier_id' => 'ผู้ขาย/ผู้รับเหมา',
            'require_date' => 'วันที่ต้องการ',
            'workreq_id' => 'เลขที่ใบแจ้ง',
            'asset_id' => 'รหัสเครื่องจักร',
            'problem_desc' => 'ปัญหาที่แจ้ง',
            'estimate_start' => 'ประมาณการณ์เริ่มงาน',
            'estimate_end' => 'ประมรณการณ์จบงาน',
            'actual_start' => 'เริ่มงานจริง',
            'actual_end' => 'จบงานจริง',
            'handover_date' => 'Handover Date',
            'downtime' => 'Downtime',
            'cost' => 'ค่าใช้จ่าย',
            'failure' => 'รหัสข้อผิดพลาด',
            'next_target_pm' => 'วันที่แผน Pm ครั้งต่อไป',
            'critical' => 'Critical',
            'problem_action' => 'บันทึกการแก้ปัญหา',
            'note' => 'หมายเหตุ',
            'pm_ref' => 'Pm Ref',
            'emp_admin' => 'ผู้ดูแลใบสั่ง',
            'workorder_status' => 'สถานะ',
            'approve_by' => 'อนุมัติโดย',
            'approve_date' => 'วันที่อนุมัติ',
            'approve_reason' => 'เหุตผลอนุมัติ',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }
}
