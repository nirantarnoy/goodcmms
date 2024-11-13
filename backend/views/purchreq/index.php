<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\PurchreqSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Purchreqs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="purchreq-index">

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Purchreq', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

          //  'id',
            'purchreq_no',
            'purchreq_date',
            'require_date',
            'purchreq_reason',
            //'workorder_id',
            //'workorder_list',
            //'priority',
            //'totalamount',
            //'request_by',
            //'approve_by',
            //'approve_date',
            //'approve_desc',
            //'status',
            //'created_at',
            //'updated_at',
            //'created_by',
            //'updated_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
