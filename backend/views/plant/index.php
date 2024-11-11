<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\PlantSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'สถานประกอบการ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="plant-index">
    <?php $form = ActiveForm::begin(['class'=>'form-inline']); ?>
    <br />
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h5>ข้อมูลสถานประกอบการ</h5>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group row">
                                <label for="plant-name" class="col-sm-2 col-form-label" style="text-align: right">ชื่อ</label>
                                <div class="col-sm-8">
                                    <?= $form->field($model, 'name')->textInput(['maxlength' => true,'id'=>'plant-name'])->label(false) ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="plant-name" class="col-sm-2 col-form-label" style="text-align: right">ชื่อภาษาอังกฤษ</label>
                                <div class="col-sm-8">
                                    <?= $form->field($model, 'engname')->textInput(['maxlength' => true,'id'=>'plant-engname'])->label(false) ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="plant-name" class="col-sm-2 col-form-label" style="text-align: right">รายละเอียด</label>
                                <div class="col-sm-8">
                                    <?= $form->field($model, 'description')->textarea(['maxlength' => true,'id'=>'plant-description'])->label(false) ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="plant-taxid" class="col-sm-2 col-form-label" style="text-align: right">เลขที่เสียภาษี</label>
                                <div class="col-sm-8">
                                    <?= $form->field($model, 'taxid')->textInput(['maxlength' => true,'id'=>'plant-taxid'])->label(false) ?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-10" style="text-align: right">
                                    <div class="form-group">
                                        <?= Html::submitButton('<b>บันทึก</b>', ['class' => 'btn btn-primary']) ?>
                                    </div>
                                </div>
                            </div>


                            <?php ActiveForm::end(); ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <h1><?php //echo Html::encode($this->title) ?></h1>
    <?php// Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php //echo Html::a('Create Plant', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php //echo GridView::widget([
//        'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
//        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],
//
//            'id',
//            'engname',
//            'name',
//            'description',
//            'logo',
//            //'taxid',
//            //'created_at',
//            //'updated_at',
//            //'created_by',
//            //'updated_by',
//
//            ['class' => 'yii\grid\ActionColumn'],
//        ],
//    ]); ?>
    <?php //Pjax::end(); ?>
</div>
