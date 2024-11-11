<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "task_assign".
 *
 * @property int $id
 * @property int $task_id
 * @property int $assign_type
 * @property int $suplier_id
 * @property int $emp_id
 * @property double $estimatesd_labor
 * @property int $created_at
 */
class TaskAssign extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'task_assign';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['task_id', 'assign_type', 'suplier_id', 'emp_id', 'created_at'], 'integer'],
            [['estimatesd_labor'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'task_id' => 'Task ID',
            'assign_type' => 'Assign Type',
            'suplier_id' => 'Suplier ID',
            'emp_id' => 'Emp ID',
            'estimatesd_labor' => 'Estimatesd Labor',
            'created_at' => 'Created At',
        ];
    }
}
