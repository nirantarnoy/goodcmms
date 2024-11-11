<?php

use toxor88\switchery\Switchery;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">
   <div class="panel panel-body">
    <?php $form = ActiveForm::begin(); ?>

       <?= $form->field($model, 'username')->textInput() ?>
       <?= $form->field($model, 'group_id')->widget(\kartik\select2\Select2::className(), [
           'data' => \yii\helpers\ArrayHelper::map(\backend\models\Usergroup::find()->all(), 'id', 'name'),
           'options' => [
               'placeholder' => 'select user group ...',
           ],
           'pluginOptions' => [
               'allowClear' => true,
           ]
       ]) ?>
       <?= $form->field($model, 'status')->widget(Switchery::className())->label(false) ?>

       <div class="panel-body">
        <form method="get" class="form-horizontal">

            <div class="form-group">
                <label class="col-sm-2 control-label">Select roles &amp; rules <br/>
                    <small class="text-navy">For this user</small>
                </label>

                <div class="col-sm-10">
                    <div><label> <input type="checkbox" class="i-checks"> System Administrator </label></div>
                    <div><label> <input type="checkbox" class="i-checks" checked> System User </label></div>
                    <div><label> <input type="checkbox" class="i-checks" checked disabled> Option three checked and disabled </label></div>
                    <div><label> <input type="checkbox" class="i-checks" disabled> Option four disabled </label></div>
                    <div><label> <input type="radio" class="i-checks"> Option one </label></div>
                    <div><label> <input type="radio" class="i-checks" checked> Option two checked </label></div>
                    <div><label> <input type="radio" class="i-checks" disabled> Option four disabled </label></div>
                    <div><label> <input type="radio" class="i-checks" checked disabled> Option three checked and disabled</label></div>
                </div>
            </div>


        </form>
    </div>

    <div class="form-group">
        <?= Html::a('Cancel',['user/index'], ['class' => 'btn btn-default']) ?>
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
</div>
