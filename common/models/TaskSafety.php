<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "task_safety".
 *
 * @property int $id
 * @property int $task_id
 * @property int $safety_id
 * @property string $title
 * @property string $filename
 * @property string $file_ext
 * @property int $created_at
 */
class TaskSafety extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'task_safety';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['task_id', 'safety_id', 'created_at'], 'integer'],
            [['title', 'filename', 'file_ext'], 'string', 'max' => 255],
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
            'safety_id' => 'Safety ID',
            'title' => 'Title',
            'filename' => 'Filename',
            'file_ext' => 'File Ext',
            'created_at' => 'Created At',
        ];
    }
}
