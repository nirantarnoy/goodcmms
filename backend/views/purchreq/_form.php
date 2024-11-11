<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Purchreq */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="purchreq-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'purchreq_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'purchreq_date')->textInput() ?>

    <?= $form->field($model, 'require_date')->textInput() ?>

    <?= $form->field($model, 'purchreq_reason')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'workorder_id')->textInput() ?>

    <?= $form->field($model, 'workorder_list')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'priority')->textInput() ?>

    <?= $form->field($model, 'totalamount')->textInput() ?>

    <?= $form->field($model, 'request_by')->textInput() ?>

    <?= $form->field($model, 'approve_by')->textInput() ?>

    <?= $form->field($model, 'approve_date')->textInput() ?>

    <?= $form->field($model, 'approve_desc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'updated_by')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
