<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "adinfo".
 *
 * @property int $id
 * @property string|null $domain_name
 * @property string|null $host_ip
 * @property int|null $post
 * @property string|null $basedn
 * @property string|null $username
 * @property string|null $password
 */
class Adinfo extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'adinfo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['domain_name', 'host_ip', 'post', 'basedn', 'username', 'password'], 'default', 'value' => null],
            [['post'], 'integer'],
            [['domain_name', 'host_ip', 'basedn', 'username', 'password'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'domain_name' => 'Domain Name',
            'host_ip' => 'Host Ip',
            'post' => 'Post',
            'basedn' => 'Basedn',
            'username' => 'Username',
            'password' => 'Password',
        ];
    }

}
