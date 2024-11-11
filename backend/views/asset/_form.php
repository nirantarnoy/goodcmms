<?php

use toxor88\switchery\Switchery;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Asset */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="asset-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'asset_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'asset_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'asset_group_id')->textInput() ?>

    <?= $form->field($model, 'department_id')->widget(\kartik\select2\Select2::className(), [
        'data' => \yii\helpers\ArrayHelper::map(\backend\models\Department::find()->all(), 'id', 'name'),
        'options' => [
            'placeholder' => 'select department',
        ],
        'pluginOptions' => [
            'allowClear' => true,
        ]
    ]) ?>
    <?= $form->field($model, 'section_id')->widget(\kartik\select2\Select2::className(), [
        'data' => \yii\helpers\ArrayHelper::map(\backend\models\Section::find()->all(), 'id', 'name'),
        'options' => [
            'placeholder' => 'select sections',
        ],
        'pluginOptions' => [
            'allowClear' => true,
        ]
    ]) ?>

    <?= $form->field($model, 'asset_location_id')->widget(\kartik\select2\Select2::className(), [
        'data' => \yii\helpers\ArrayHelper::map(\backend\models\Assetlocation::find()->all(), 'id', 'name'),
        'options' => [
            'placeholder' => 'select asset location',
        ],
        'pluginOptions' => [
            'allowClear' => true,
        ]
    ]) ?>

    <?= $form->field($model, 'critical')->textInput() ?>

    <?= $form->field($model, 'manufacturer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'brand')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'asset_model')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'asset_cat_id')->widget(\kartik\select2\Select2::className(), [
        'data' => \yii\helpers\ArrayHelper::map(\backend\models\Assetgroup::find()->all(), 'id', 'name'),
        'options' => [
            'placeholder' => 'select asset group',
        ],
        'pluginOptions' => [
            'allowClear' => true,
        ]
    ]) ?>

    <?= $form->field($model, 'asset_status')->widget(Switchery::className())->label(false) ?>

    <?= $form->field($model, 'responsible')->textInput() ?>

    <?= $form->field($model, 'note')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::a('<b class="text-danger">ยกเลิก</b>',['asset/index'], ['class' => 'btn btn-default']) ?>
        <?= Html::submitButton('บันทึก', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
