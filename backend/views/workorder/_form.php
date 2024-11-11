<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Workorder */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="workorder-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'workorder_no')->textInput(['maxlength' => true,'readonly'=>'readonly','value'=>$model->isNewRecord?$runno:$model->workorder_no]) ?>

    <?= $form->field($model, 'workorder_date')->textInput() ?>

    <?= $form->field($model, 'work_type')->textInput() ?>

    <?= $form->field($model, 'worktrade_id')->textInput() ?>

    <?= $form->field($model, 'suplier_id')->textInput() ?>

    <?= $form->field($model, 'require_date')->textInput() ?>

    <?= $form->field($model, 'workreq_id')->textInput() ?>

    <?= $form->field($model, 'asset_id')->textInput() ?>

    <?= $form->field($model, 'problem_desc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'estimate_start')->textInput() ?>

    <?= $form->field($model, 'estimate_end')->textInput() ?>

    <?= $form->field($model, 'actual_start')->textInput() ?>

    <?= $form->field($model, 'actual_end')->textInput() ?>

    <?= $form->field($model, 'handover_date')->textInput() ?>

    <?= $form->field($model, 'downtime')->textInput() ?>

    <?= $form->field($model, 'cost')->textInput() ?>

    <?= $form->field($model, 'failure')->textInput() ?>

    <?= $form->field($model, 'next_target_pm')->textInput() ?>

    <?= $form->field($model, 'critical')->textInput() ?>

    <?= $form->field($model, 'problem_action')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'note')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pm_ref')->textInput() ?>

    <?= $form->field($model, 'emp_admin')->textInput() ?>

    <?= $form->field($model, 'workorder_status')->textInput() ?>

    <?= $form->field($model, 'approve_by')->textInput() ?>

    <?= $form->field($model, 'approve_date')->textInput() ?>

    <?= $form->field($model, 'approve_reason')->textInput(['maxlength' => true]) ?>



    <div class="form-group">
        <?= Html::a('<b class="text-danger">ยกเลิก</b>',['workorder/index'], ['class' => 'btn btn-default']) ?>
        <?= Html::submitButton('บันทึก', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
