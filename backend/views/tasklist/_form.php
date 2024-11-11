<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Tasklist */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tasklist-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->widget(\toxor88\switchery\Switchery::className())->label(false) ?>


    <div class="form-group">
        <?= Html::a('<b class="text-danger">ยกเลิก</b>',['tasklist/index'], ['class' => 'btn btn-default']) ?>
        <?= Html::submitButton('บันทึก', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
