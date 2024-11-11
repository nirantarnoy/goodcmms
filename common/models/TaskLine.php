<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "task_line".
 *
 * @property int $id
 * @property double $seq
 * @property string $title
 * @property string $description
 * @property int $task_id
 * @property double $acceptable_factor
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 * @property int $created_by
 * @property int $updated_by
 */
class TaskLine extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'task_line';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['task_id'],'required'],
            [['seq', 'acceptable_factor'], 'number'],
            [['task_id', 'status', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['title', 'description'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'seq' => 'ลำดับ',
            'title' => 'หัวข้อ',
            'description' => 'รายละเอียด',
            'task_id' => 'เลขที่งาน',
            'acceptable_factor' => 'ค่าที่ยอมรับได้',
            'status' => 'สถานะ',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }
}
