<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "purchreq_line".
 *
 * @property int $id
 * @property int $purchreq_id
 * @property int $itemid
 * @property double $qty
 * @property double $price
 * @property double $lineamount
 * @property double $line_disc
 * @property int $created_at
 * @property int $updated_at
 * @property int $created_by
 * @property int $updated_by
 */
class PurchreqLine extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'purchreq_line';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['purchreq_id', 'itemid', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['qty', 'price', 'lineamount', 'line_disc'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'purchreq_id' => 'Purchreq ID',
            'itemid' => 'Itemid',
            'qty' => 'Qty',
            'price' => 'Price',
            'lineamount' => 'Lineamount',
            'line_disc' => 'Line Disc',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }
}
