<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "purchreq".
 *
 * @property int $id
 * @property string $purchreq_no
 * @property string $purchreq_date
 * @property string $require_date
 * @property string $purchreq_reason
 * @property int $workorder_id
 * @property string $workorder_list
 * @property int $priority
 * @property double $totalamount
 * @property int $request_by
 * @property int $approve_by
 * @property string $approve_date
 * @property string $approve_desc
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 * @property int $created_by
 * @property int $updated_by
 */
class Purchreq extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'purchreq';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['purchreq_date', 'require_date', 'approve_date'], 'safe'],
            [['workorder_id', 'priority', 'request_by', 'approve_by', 'status', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['totalamount'], 'number'],
            [['purchreq_no', 'purchreq_reason', 'workorder_list', 'approve_desc'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'purchreq_no' => 'Purchreq No',
            'purchreq_date' => 'Purchreq Date',
            'require_date' => 'Require Date',
            'purchreq_reason' => 'Purchreq Reason',
            'workorder_id' => 'Workorder ID',
            'workorder_list' => 'Workorder List',
            'priority' => 'Priority',
            'totalamount' => 'Totalamount',
            'request_by' => 'Request By',
            'approve_by' => 'Approve By',
            'approve_date' => 'Approve Date',
            'approve_desc' => 'Approve Desc',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }
}
