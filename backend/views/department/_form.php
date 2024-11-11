<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;


$plant = \backend\models\Plant::find()->all();
/* @var $this yii\web\View */
/* @var $model backend\models\Department */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="department-form" style="margin-top: 15px;margin-bottom: 15px;">
    <br />
    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group row">
                <label for="plant-name" class="col-sm-2 col-form-label" style="text-align: right">สถานประกอบการ</label>
                <div class="col-sm-8">
                    <select class="js-source-states form-control" name="site" style="width: 100%">
                        <?php foreach ($plant as $value):?>
                            <?php
                            $selected = "";
                            if($value->id == $model->site_id){$selected='selected';}
                            ?>
                            <option value="<?=$value->id?>" <?=$selected?>><?=$value->name?></option>
                        <?php endforeach;?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="plant-name" class="col-sm-2 col-form-label" style="text-align: right">รหัสฝ่าย</label>
                <div class="col-sm-8">
                    <?= $form->field($model, 'code')->textInput(['maxlength' => true])->label(false) ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="plant-name" class="col-sm-2 col-form-label" style="text-align: right">ชื่อฝ่าย</label>
                <div class="col-sm-8">
                    <?= $form->field($model, 'name')->textInput(['maxlength' => true])->label(false) ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="plant-name" class="col-sm-2 col-form-label" style="text-align: right">รายละเอียด</label>
                <div class="col-sm-8">
                    <?= $form->field($model, 'description')->textarea(['maxlength' => true])->label(false) ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="plant-name" class="col-sm-2 col-form-label" style="text-align: right">สถานะ</label>
                <div class="col-sm-8">
                    <?= $form->field($model, 'status')->widget(\toxor88\switchery\Switchery::className())->label(false) ?>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-10" style="text-align: right">
            <div class="form-group">
                <?= Html::a('<b class="text-danger">ยกเลิก</b>',['department/index'], ['class' => 'btn btn-default']) ?>
                <?= Html::submitButton('บันทึก', ['class' => 'btn btn-primary']) ?>
            </div>
        </div>
    </div>


    <?php ActiveForm::end(); ?>

</div>
<br>
