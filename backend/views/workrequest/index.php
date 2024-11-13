<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\WorkrequestSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'คำร้องแจ้งซ่อม';
$this->params['breadcrumbs'][] = $this->title;

$perpage = 20;
?>
<div class="workrequest-index">
    <div class="panel panel-body">
        <div class="row">
            <div class="col-lg-1">
                <p>
                    <?= Html::a(Yii::t('app', '<i class="fa fa-plus"></i> สร้างใหม่'), ['create'], ['class' => 'btn btn-success']) ?>
                </p>
            </div>
            <div class="col-lg-9">
                <div class="btn-group">
                    <div class="btn btn-success">All</div>
                    <div class="btn btn-secondary">Opened</div>
                    <div class="btn btn-secondary">Approved</div>
                    <div class="btn btn-secondary">Rejected</div>
                    <div class="btn btn-secondary">Closed</div>
                </div>
            </div>
            <div class="col-lg-2" style="text-align: right">
                <form id="form-perpage" class="form-inline" action="<?= Url::to(['workrequest/index'], true) ?>"
                      method="post">
                    <div class="form-group">
                        <label>แสดง </label>
                        <select class="form-control" name="perpage" id="perpage">
                            <option value="20" <?= $perpage == '20' ? 'selected' : '' ?>>20</option>
                            <option value="50" <?= $perpage == '50' ? 'selected' : '' ?> >50</option>
                            <option value="100" <?= $perpage == '100' ? 'selected' : '' ?>>100</option>
                        </select>
                        <label> รายการ</label>
                    </div>
                </form>
            </div>
        </div>
        <?php Pjax::begin(); ?>
        <?php echo $this->render('_search', ['model' => $searchModel]); ?>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            // 'filterModel' => $searchModel,
            'emptyCell' => '-',
            'layout' => "{items}\n{summary}\n<div class='text-center'>{pager}</div>",
            'summary' => "แสดง {begin} - {end} ของทั้งหมด {totalCount} รายการ",
            'showOnEmpty' => false,
            //    'bordered' => true,
            //     'striped' => false,
            //    'hover' => true,
            'id' => 'product-grid',
            //'tableOptions' => ['class' => 'table table-hover'],
            'emptyText' => '<div style="color: red;text-align: center;"> <b>ไม่พบรายการไดๆ</b> <span> เพิ่มรายการโดยการคลิกที่ปุ่ม </span><span class="text-success">"สร้างใหม่"</span></div>',
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                [
                    'class' => 'yii\grid\CheckboxColumn',
                    'checkboxOptions' => function ($model, $key, $index, $column) {
                        return [
                            'value' => $model->id,
                            'class' => 'i-checks',
                            'id' => 'gridcheck' . $model->id
                        ];
                    },
                    'header' => Html::checkbox('All', false, ['id' => 'head-check', 'class' => 'i-checks']),
                    'contentOptions' => ['style' => 'vertical-align: middle']
                ],

                //    'id',
                [
                    'attribute' => 'workreq_no',
                    'contentOptions' => ['style' => 'vertical-align: middle']
                ],
                [
                    'attribute' => 'workreq_date',
                    'contentOptions' => ['style' => 'vertical-align: middle']
                ],
                [
                    'attribute' => 'work_type',
                    'contentOptions' => ['style' => 'vertical-align: middle'],
                    'value' => function ($data) {
                        return \backend\models\Worktype::findName($data->work_type);
                    }
                ],
                [
                    'attribute' => 'priority',
                    'contentOptions' => ['style' => 'vertical-align: middle']
                ],
                //'problem_desc',
                //'note',
                //'site_id',
                //'department_id',
                //'section_id',
                //'asset_location_id',
                [
                    'attribute' => 'asset_id',
                    'contentOptions' => ['style' => 'vertical-align: middle'],
                    'value' => function ($data) {
                        return \backend\models\Asset::findName($data->asset_id);
                    }
                ],
                [
                    'attribute' => 'is_approve',
                    'contentOptions' => ['style' => 'vertical-align: middle']
                ],
                //'approve_by',
                //'approve_date',
                //'approve_reason',
                //'workorder_id',
                [
                    'attribute' => 'request_by',
                    'contentOptions' => ['style' => 'vertical-align: middle']
                ],
                //'review_by',
                //'assign_user',
                [
                    'attribute' => 'status',
                    'contentOptions' => ['style' => 'vertical-align: middle']
                ],
                //'created_at',
                //'updated_at',
                //'created_by',
                //'updated_by',

                // ['class' => 'yii\grid\ActionColumn'],
                [

                    'header' => '',
                    'headerOptions' => ['style' => 'text-align:center;', 'class' => 'activity-view-link',],
                    'class' => 'yii\grid\ActionColumn',
                    'contentOptions' => ['style' => 'text-align: right', 'vertical-align: middle'],
                    'buttons' => [
                        'view' => function ($url, $data, $index) {
                            $options = [
                                'title' => Yii::t('yii', 'View'),
                                'aria-label' => Yii::t('yii', 'View'),
                                'data-pjax' => '0',
                            ];
                            return Html::a(
                                '<span class="fas fa-eye btn btn-xs btn-default"></span>', $url, $options);
                        },
                        'update' => function ($url, $data, $index) {
                            $options = array_merge([
                                'title' => Yii::t('yii', 'Update'),
                                'aria-label' => Yii::t('yii', 'Update'),
                                'data-pjax' => '0',
                                'id' => 'modaledit',
                            ]);
                            return Html::a(
                                '<span class="fas fa-edit btn btn-xs btn-default"></span>', $url, [
                                'id' => 'activity-view-link',
                                //'data-toggle' => 'modal',
                                // 'data-target' => '#modal',
                                'data-id' => $index,
                                'data-pjax' => '0',
                                // 'style'=>['float'=>'rigth'],
                            ]);
                        },
                        'delete' => function ($url, $data, $index) {
                            $options = array_merge([
                                'title' => Yii::t('yii', 'Delete'),
                                'aria-label' => Yii::t('yii', 'Delete'),
                                //'data-confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
                                //'data-method' => 'post',
                                //'data-pjax' => '0',
                                'data-url' => $url,
                                'data-var' => $data->id,
                                'onclick' => 'recDelete($(this));'
                            ]);
                            return Html::a('<span class="fas fa-trash-alt btn btn-xs btn-default"></span>', 'javascript:void(0)', $options);
                        }
                    ]
                ],
            ],
        ]); ?>
        <?php Pjax::end(); ?>

    </div>
</div>
