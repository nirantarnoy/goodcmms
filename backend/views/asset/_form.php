<?php

use toxor88\switchery\Switchery;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Asset */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="asset-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

    <div class="row">
        <div class="col-lg-3">
            <?= $form->field($model, 'asset_no')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-3">
            <?= $form->field($model, 'asset_name')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-3">
            <?= $form->field($model, 'description')->textarea(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-3">
            <?= $form->field($model, 'asset_group_id')->widget(\kartik\select2\Select2::className(), [
                'data' => \yii\helpers\ArrayHelper::map(\backend\models\Assetgroup::find()->all(), 'id', 'name'),
                'options' => [
                    'placeholder' => 'select asset group ...',
                ],
                'pluginOptions' => [
                    'allowClear' => true,
                ]
            ]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3">
            <?= $form->field($model, 'department_id')->widget(\kartik\select2\Select2::className(), [
                'data' => \yii\helpers\ArrayHelper::map(\backend\models\Department::find()->all(), 'id', 'name'),
                'options' => [
                    'placeholder' => 'select department',
                ],
                'pluginOptions' => [
                    'allowClear' => true,
                ]
            ]) ?>
        </div>
        <div class="col-lg-3">
            <?= $form->field($model, 'section_id')->widget(\kartik\select2\Select2::className(), [
                'data' => \yii\helpers\ArrayHelper::map(\backend\models\Section::find()->all(), 'id', 'name'),
                'options' => [
                    'placeholder' => 'select sections',
                ],
                'pluginOptions' => [
                    'allowClear' => true,
                ]
            ]) ?>
        </div>
        <div class="col-lg-3">
            <?= $form->field($model, 'asset_location_id')->widget(\kartik\select2\Select2::className(), [
                'data' => \yii\helpers\ArrayHelper::map(\backend\models\Assetlocation::find()->all(), 'id', 'name'),
                'options' => [
                    'placeholder' => 'select asset location',
                ],
                'pluginOptions' => [
                    'allowClear' => true,
                ]
            ]) ?>
        </div>
        <div class="col-lg-3">
            <?= $form->field($model, 'critical')->widget(\kartik\select2\Select2::className(), [
                'data' => \yii\helpers\ArrayHelper::map(\common\models\WorkCritical::find()->all(), 'id', 'name'),
                'options' => [
                    'placeholder' => 'select Work Critical',
                ],
                'pluginOptions' => [
                    'allowClear' => true,
                ]
            ]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3">
            <?= $form->field($model, 'asset_cat_id')->widget(\kartik\select2\Select2::className(), [
                'data' => \yii\helpers\ArrayHelper::map(\backend\models\Assetgroup::find()->all(), 'id', 'name'),
                'options' => [
                    'placeholder' => 'select asset group',
                ],
                'pluginOptions' => [
                    'allowClear' => true,
                ]
            ]) ?>
        </div>
        <div class="col-lg-3">
            <?= $form->field($model, 'manufacturer')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-3">
            <?= $form->field($model, 'brand')->widget(\kartik\select2\Select2::className(), [
                'data' => \yii\helpers\ArrayHelper::map(\backend\models\Assetbrand::find()->all(), 'id', 'name'),
                'options' => [
                    'placeholder' => '--เลือก--',
                ],
                'pluginOptions' => [
                    'allowClear' => true,
                ]
            ]) ?>
        </div>
        <div class="col-lg-3">
            <?= $form->field($model, 'asset_model')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3">
            <?= $form->field($model, 'asset_serial_no')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-3">
            <?= $form->field($model, 'warranty_month_qty')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-3">
            <?= $form->field($model, 'exp_warranty_date')->widget(\kartik\date\DatePicker::className(),[
                'type' => \kartik\date\DatePicker::TYPE_COMPONENT_APPEND,
                'options' => [
                    'autocomplete' => 'off',
                    'format' => 'dd-mm-yyyy',
                ],
                'pluginOptions' => [
                    'autoclose'=>true,
                ]
            ]) ?>
        </div>
        <div class="col-lg-3">
            <?= $form->field($model, 'responsible')->widget(\kartik\select2\Select2::className(), [
                'data' => \yii\helpers\ArrayHelper::map(\backend\models\Employee::find()->all(), 'id', function ($model) {
                    return $model['firstname'] . ' ' . $model['lastname'];
                }),
                'options' => [
                    'placeholder' => 'select department',
                ],
                'pluginOptions' => [
                    'allowClear' => true,
                ]
            ]) ?>
        </div>
    </div>
    <div class="row">

        <div class="col-lg-6">
            <?= $form->field($model, 'note')->textarea(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <?= $form->field($model, 'photo[]')->fileInput(['multiple' => 'multiple', 'id' => 'asset-photo', 'accept' => 'image/*']) ?>
        </div>
        <div class="col-lg-3">
            <?= $form->field($model, 'asset_status')->widget(Switchery::className())->label(false) ?>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-12">
            <h5><b>รูปภาพเครื่องจักร</b></h5>
        </div>
    </div>
    <?php if ($model->isNewRecord): ?>
        <div class="row" style="padding: 1px;">
            <div class="col-lg-3"
                 style="border: 1px dashed grey;border-right: none;height: 150px;text-align: center;">

            </div>
            <div class="col-lg-3" style="border: 1px dashed grey;border-right: none;height: 150px;">

            </div>
            <div class="col-lg-3" style="border: 1px dashed grey;border-right: none;height: 150px;">

            </div>
            <div class="col-lg-3" style="border: 1px dashed grey;height: 150px;">

            </div>
        </div>
    <?php else: ?>
        <div class="row" style="padding: 1px;">
            <?php for ($x = 0; $x <= 3; $x++): ?>
                <?php $loop = -1; ?>
                <?php foreach ($model_asset_photo as $valuex): ?>
                    <?php $loop += 1; ?>
                    <?php if ($x == 0 && $loop == 0): ?>
                        <div class="col-lg-3"
                             style="border: 1px dashed grey;border;height: 250px;text-align: center;">
                            <input type="hidden" name="old_photo" value=" <?= $valuex->photo ?>">
                            <a href="<?= \Yii::$app->getUrlManager()->baseUrl . '/uploads/location_photo/' . $valuex->photo ?>"
                               target="_blank">
                                <img src="<?= \Yii::$app->getUrlManager()->baseUrl . '/uploads/asset_photo/' . $valuex->photo ?>"
                                     style="max-width: 150px;margin-top: 5px;" alt=""></a>
                        </div>
                        <?php continue 2; ?>
                    <?php elseif ($x == 1 && $loop == 1): ?>
                        <div class="col-lg-3"
                             style="border: 1px dashed grey;border-right: none;height: 250px;text-align: center;">
                            <img src="<?= \Yii::$app->getUrlManager()->baseUrl . '/uploads/asset_photo/' . $valuex->photo ?>"
                                 style="max-width: 130px;margin-top: 5px;" alt="">
                        </div>
                        <?php continue 2; ?>
                    <?php elseif ($x == 2 && $loop == 2): ?>
                        <div class="col-lg-3"
                             style="border: 1px dashed grey;border-right: none;height: 250px;text-align: center;">
                            <img src="<?= \Yii::$app->getUrlManager()->baseUrl . '/uploads/asset_photo/' . $valuex->photo ?>"
                                 style="max-width: 130px;margin-top: 5px;" alt="">
                        </div>
                        <?php continue 2; ?>
                    <?php elseif ($x == 3 && $loop == 3): ?>
                        <div class="col-lg-3" style="border: 1px dashed grey;height: 250px;text-align: center;">
                            <img src="<?= \Yii::$app->getUrlManager()->baseUrl . '/uploads/asset_photo/' . $valuex->photo ?>"
                                 style="max-width: 130px;margin-top: 5px;" alt="">
                        </div>
                        <?php continue 2; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endfor; ?>
        </div>
    <?php endif; ?>
    <br/>

    <div class="form-group">
        <?= Html::a('<b class="text-danger">ยกเลิก</b>',['asset/index'], ['class' => 'btn btn-default']) ?>
        <?= Html::submitButton('บันทึก', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
