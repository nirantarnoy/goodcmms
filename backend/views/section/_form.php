<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Section */
/* @var $form yii\widgets\ActiveForm */

$dept = \backend\models\Department::find()->all();
?>

<div class="section-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['maxlength' => true]) ?>
    <?= $form->field($model, 'department_id')->widget(\kartik\select2\Select2::className(), [
        'data' => \yii\helpers\ArrayHelper::map(\backend\models\Department::find()->all(), 'id', 'name'),
        'options' => [
            'placeholder' => 'select department',
        ],
        'pluginOptions' => [
            'allowClear' => true,
        ]
    ]) ?>

    <br>
    <?= $form->field($model, 'status')->widget(\toxor88\switchery\Switchery::className())->label(false) ?>

    <div class="form-group">
        <?= Html::a('<b class="text-danger">ยกเลิก</b>', ['section/index'], ['class' => 'btn btn-default']) ?>
        <?= Html::submitButton('<b>บันทึก</b>', ['class' => 'btn btn-primary']) ?>
    </div>


    <?php ActiveForm::end(); ?>

</div>
