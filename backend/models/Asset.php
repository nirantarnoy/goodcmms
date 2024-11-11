<?php
namespace backend\models;
use Yii;
use yii\db\ActiveRecord;
date_default_timezone_set('Asia/Bangkok');

class Asset extends \common\models\Asset
{
    public function behaviors()
    {
        return [
            'timestampcdate'=>[
                'class'=> \yii\behaviors\AttributeBehavior::className(),
                'attributes'=>[
                    ActiveRecord::EVENT_BEFORE_INSERT=>'created_at',
                ],
                'value'=> time(),
            ],
            'timestampudate'=>[
                'class'=> \yii\behaviors\AttributeBehavior::className(),
                'attributes'=>[
                    ActiveRecord::EVENT_BEFORE_INSERT=>'updated_at',
                ],
                'value'=> time(),
            ],
            'timestampcby'=>[
                'class'=> \yii\behaviors\AttributeBehavior::className(),
                'attributes'=>[
                    ActiveRecord::EVENT_BEFORE_INSERT=>'created_by',
                ],
                'value'=> Yii::$app->user->identity->id,
            ],
            'timestamuby'=>[
                'class'=> \yii\behaviors\AttributeBehavior::className(),
                'attributes'=>[
                    ActiveRecord::EVENT_BEFORE_UPDATE=>'updated_by',
                ],
                'value'=> Yii::$app->user->identity->id,
            ],
            'timestampupdate'=>[
                'class'=> \yii\behaviors\AttributeBehavior::className(),
                'attributes'=>[
                    ActiveRecord::EVENT_BEFORE_UPDATE=>'updated_at',
                ],
                'value'=> time(),
            ],
        ];
    }

    public function findCode($id){
        $model = Asset::find()->where(['id'=>$id])->one();
        return $model!=null?$model->asset_no:'';
    }
//    public function findFullname($id){
//        $model = Customer::find()->where(['id'=>$id])->one();
//        return count($model)>0?$model->code." ".$model->first_name.' '.$model->last_name:'';
//    }
    public function findName($id){
        $model = Asset::find()->where(['id'=>$id])->one();
        return $model!=null?$model->asset_name:'';
    }
//    public function findId($code){
//        $model = Customer::find()->where(['code'=>$code])->one();
//        return count($model)>0?$model->id:0;
//    }
//    public function findPhone($id){
//        $model = Customer::find()->where(['code'=>$id])->one();
//        return count($model)>0?$model->phone:'';
//    }

}
