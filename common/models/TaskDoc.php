<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "task_doc".
 *
 * @property int $id
 * @property int $task_id
 * @property string $title
 * @property string $filename
 * @property string $file_ext
 * @property int $created_at
 */
class TaskDoc extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'task_doc';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['task_id', 'created_at'], 'integer'],
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
            'title' => 'Title',
            'filename' => 'Filename',
            'file_ext' => 'File Ext',
            'created_at' => 'Created At',
        ];
    }
}
