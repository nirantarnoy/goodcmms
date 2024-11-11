<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "site".
 *
 * @property int $id
 * @property string $engname
 * @property string $name
 * @property string $description
 * @property string $logo
 * @property string $taxid
 * @property int $created_at
 * @property int $updated_at
 * @property int $created_by
 * @property int $updated_by
 */
class Site extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'site';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'],'required'],
            [['created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['engname', 'name', 'description', 'logo', 'taxid'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'engname' => 'ชื่อภาษาอังกฤษ',
            'name' => 'ชื่อ',
            'description' => 'รายละเอียด',
            'logo' => 'โลโก้',
            'taxid' => 'เลขที่เสียภาษี',
            'created_at' => 'สร้างเมื่อ',
            'updated_at' => 'แก้ไขเมื่อ',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }
}
