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


    <br />
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-bordered table-striped" style="width: 100%">
               <thead>
               <tr>
                   <th style="width: 10%">ลำดับ</th>
                   <th style="width: 60%">หัวข้อ</th>
                   <th style="width: 20%">เกณฑ์ผ่าน</th>
                   <th style="width: 10%">-</th>
               </tr>
               </thead>
                <tbody>
                <tr>
                    <td>
                        <input type="text" class="form-control line-seq" name="line_seq[]" value="">
                    </td>
                    <td>
                        <input type="text" class="form-control line-title" name="line_title[]" value="">
                    </td>
                    <td>
                        <input type="text" class="form-control line-factor" name="line_factor[]" value="">
                    </td>
                    <td>
                        <div class="btn btn-sm btn-danger">ลบ</div>
                    </td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                    <td><div class="btn btn-sm btn-primary">เพิ่มรายการ</div></td>
                    <td colspan="3"></td>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <div class="form-group">
        <?= Html::a('<b class="text-danger">ยกเลิก</b>',['tasklist/index'], ['class' => 'btn btn-default']) ?>
        <?= Html::submitButton('บันทึก', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
