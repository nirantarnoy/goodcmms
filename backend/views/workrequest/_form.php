<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\Workrequest */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="workrequest-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'workreq_no')->textInput(['maxlength' => true,'readonly'=>'readonly','value'=>$model->isNewRecord?$runno:$model->workreq_no]) ?>

    <p>Date/time picker widget based on twitter bootstrap</p>
    <div class="form-group">
        <div class="input-group date" id="datetimepicker1">
                                <span class="input-group-addon">
                                    <span class="fa fa-calendar"></span>
                                </span>
            <input type="text" class="form-control"/>
        </div>
    </div>

    <?= $form->field($model, 'work_type')->textInput() ?>

    <?= $form->field($model, 'priority')->textInput()->label() ?>

    <?= $form->field($model, 'problem_desc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'note')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'site_id')->textInput() ?>

    <?= $form->field($model, 'department_id')->textInput() ?>

    <?= $form->field($model, 'section_id')->textInput() ?>

    <?= $form->field($model, 'asset_location_id')->textInput() ?>

    <?= $form->field($model, 'asset_id')->textInput() ?>

    <?= $form->field($model, 'is_approve')->textInput() ?>

    <?= $form->field($model, 'approve_by')->textInput() ?>

    <?= $form->field($model, 'approve_date')->textInput() ?>

    <?= $form->field($model, 'approve_reason')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'workorder_id')->textInput() ?>

    <?= $form->field($model, 'request_by')->textInput() ?>

    <?= $form->field($model, 'review_by')->textInput() ?>

    <?= $form->field($model, 'assign_user')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::a('<b class="text-danger">ยกเลิก</b>',['workrequest/index'], ['class' => 'btn btn-default']) ?>
        <?= Html::submitButton('บันทึก', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
