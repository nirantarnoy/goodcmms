<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PurchreqSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="purchreq-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'purchreq_no') ?>

    <?= $form->field($model, 'purchreq_date') ?>

    <?= $form->field($model, 'require_date') ?>

    <?= $form->field($model, 'purchreq_reason') ?>

    <?php // echo $form->field($model, 'workorder_id') ?>

    <?php // echo $form->field($model, 'workorder_list') ?>

    <?php // echo $form->field($model, 'priority') ?>

    <?php // echo $form->field($model, 'totalamount') ?>

    <?php // echo $form->field($model, 'request_by') ?>

    <?php // echo $form->field($model, 'approve_by') ?>

    <?php // echo $form->field($model, 'approve_date') ?>

    <?php // echo $form->field($model, 'approve_desc') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'updated_by') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
