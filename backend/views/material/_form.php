<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Material */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="material-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'standard_cost')->textInput() ?>

    <?= $form->field($model, 'leadtime')->textInput() ?>

    <?= $form->field($model, 'min_stock')->textInput() ?>

    <?= $form->field($model, 'max_stock')->textInput() ?>

    <?= $form->field($model, 'min_order')->textInput() ?>

    <?= $form->field($model, 'max_order')->textInput() ?>

    <?= $form->field($model, 'default_warehouse')->textInput() ?>

    <?= $form->field($model, 'allow_negative')->textInput() ?>

    <?= $form->field($model, 'critical_type')->textInput() ?>

    <?= $form->field($model, 'unit')->textInput() ?>

    <?= $form->field($model, 'manufacturer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'note')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'all_qty')->textInput() ?>

    <?= $form->field($model, 'average_cose')->textInput() ?>

    <?= $form->field($model, 'type_id')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <div class="form-group">
        <?= Html::a('<b class="text-danger">ยกเลิก</b>',['material/index'], ['class' => 'btn btn-default']) ?>
        <?= Html::submitButton('<b>บันทึก</b>', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
