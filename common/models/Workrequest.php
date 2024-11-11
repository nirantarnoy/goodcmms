<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "workrequest".
 *
 * @property int $id
 * @property string $workreq_no
 * @property string $workreq_date
 * @property int $work_type
 * @property int $priority
 * @property string $problem_desc
 * @property string $note
 * @property int $site_id
 * @property int $department_id
 * @property int $section_id
 * @property int $asset_location_id
 * @property int $asset_id
 * @property int $is_approve
 * @property int $approve_by
 * @property string $approve_date
 * @property string $approve_reason
 * @property int $workorder_id
 * @property int $request_by
 * @property int $review_by
 * @property int $assign_user
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 * @property int $created_by
 * @property int $updated_by
 */
class Workrequest extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'workrequest';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['workreq_no','asset_id'],'required'],
            [['workreq_date', 'approve_date'], 'safe'],
            [['work_type', 'priority', 'site_id', 'department_id', 'section_id', 'asset_location_id', 'asset_id', 'is_approve', 'approve_by', 'workorder_id', 'request_by', 'review_by', 'assign_user', 'status', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['workreq_no', 'problem_desc', 'note', 'approve_reason'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'workreq_no' => 'เลขที่',
            'workreq_date' => 'วันที่ร้องขอ',
            'work_type' => 'ประเภทงาน',
            'priority' => 'ระดับความสำคัญ',
            'problem_desc' => 'รายละเอียดร้องขอ',
            'note' => 'บันทึก',
            'site_id' => 'Site ID',
            'department_id' => 'ฝ่าย',
            'section_id' => 'แผนก',
            'asset_location_id' => 'ที่ตั้งเครื่องจักร',
            'asset_id' => 'รหัสเครื่องจักร',
            'is_approve' => 'ฝ่ายร้องขออนุมัติ',
            'approve_by' => 'อนุมัติโดย',
            'approve_date' => 'วันที่อนุมัติ',
            'approve_reason' => 'เหตุผลประกอบ',
            'workorder_id' => 'เลขที่ใบสั่งซ่อม',
            'request_by' => 'ร้องขอโดย',
            'review_by' => 'ครวจสอบโดย',
            'assign_user' => 'ผู้รับผิดชอบ',
            'status' => 'สถานะ',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }
}
