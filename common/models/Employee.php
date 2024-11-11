<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "employee".
 *
 * @property int $id
 * @property string $emp_code
 * @property int $prefix
 * @property string $first_name
 * @property string $last_name
 * @property string $nickname
 * @property string $phone
 * @property string $email
 * @property string $note
 * @property int $site_id
 * @property int $department_id
 * @property int $section_id
 * @property int $position_id
 * @property int $user_relation
 * @property string $photo_profile
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 * @property int $created_by
 * @property int $updated_by
 */
class Employee extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'employee';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['prefix', 'site_id', 'department_id', 'section_id', 'position_id', 'user_relation', 'status', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['emp_code', 'first_name', 'last_name', 'nickname', 'phone', 'email', 'note', 'photo_profile'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'emp_code' => 'Emp Code',
            'prefix' => 'Prefix',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'nickname' => 'Nickname',
            'phone' => 'Phone',
            'email' => 'Email',
            'note' => 'Note',
            'site_id' => 'Site ID',
            'department_id' => 'Department ID',
            'section_id' => 'Section ID',
            'position_id' => 'Position ID',
            'user_relation' => 'User Relation',
            'photo_profile' => 'Photo Profile',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }
}
