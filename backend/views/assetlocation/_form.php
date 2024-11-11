<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Assetlocation */
/* @var $form yii\widgets\ActiveForm */

$dept = \backend\models\Department::find()->all();
$sect = \backend\models\Section::find()->all();
?>

<div class="assetlocation-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['maxlength' => true]) ?>

    <?= $form->field($model, 'department_id')->widget(\kartik\select2\Select2::className(),[
            'data'=>\yii\helpers\ArrayHelper::map(\backend\models\Department::find()->all(),'id','name'),
            'options'=>['placeholder'=>'Select a Department'],
            'pluginOptions'=>['allowClear'=>true],
    ]) ?>

    <br>
    <?= $form->field($model, 'section_id')->widget(\kartik\select2\Select2::className(),[
        'data'=>\yii\helpers\ArrayHelper::map(\backend\models\Section::find()->all(),'id','name'),
        'options'=>['placeholder'=>'Select a Section'],
        'pluginOptions'=>['allowClear'=>true],
    ]) ?>
    <br>

    <?= $form->field($model, 'status')->widget(\toxor88\switchery\Switchery::className())->label(false) ?>


    <div class="form-group">
        <?= Html::a('<b class="text-danger">ยกเลิก</b>',['assetlocation/index'], ['class' => 'btn btn-default']) ?>
        <?= Html::submitButton('บันทึก', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
