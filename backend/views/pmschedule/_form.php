<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Pmschedule */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pmschedule-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'asset_id')->textInput() ?>

    <?= $form->field($model, 'pm_type')->textInput() ?>

    <?= $form->field($model, 'pm_for')->textInput() ?>

    <?= $form->field($model, 'worktrade_id')->textInput() ?>

    <?= $form->field($model, 'worktype_id')->textInput() ?>

    <?= $form->field($model, 'suplier_id')->textInput() ?>

    <?= $form->field($model, 'pm_location_id')->textInput() ?>

    <?= $form->field($model, 'pm_section_id')->textInput() ?>

    <?= $form->field($model, 'pm_department_id')->textInput() ?>

    <?= $form->field($model, 'generate_type')->textInput() ?>

    <?= $form->field($model, 'task_id')->textInput() ?>

    <?= $form->field($model, 'frequency_unit')->textInput() ?>

    <?= $form->field($model, 'frequency')->textInput() ?>

    <?= $form->field($model, 'days')->textInput() ?>

    <?= $form->field($model, 'period_day')->textInput() ?>

    <?= $form->field($model, 'target_start')->textInput() ?>

    <?= $form->field($model, 'target_end')->textInput() ?>

    <?= $form->field($model, 'next_target_start')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'note')->textInput(['maxlength' => true]) ?>


    <div class="form-group">
        <?= Html::a('<b class="text-danger">ยกเลิก</b>',['pmschedule/index'], ['class' => 'btn btn-default']) ?>
        <?= Html::submitButton('บันทึก', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
