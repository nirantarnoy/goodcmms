<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "task_material".
 *
 * @property int $id
 * @property int $task_id
 * @property int $material_id
 * @property double $qty
 * @property int $created_at
 */
class TaskMaterial extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'task_material';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['task_id', 'material_id', 'created_at'], 'integer'],
            [['qty'], 'number'],
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
            'material_id' => 'Material ID',
            'qty' => 'Qty',
            'created_at' => 'Created At',
        ];
    }
}
