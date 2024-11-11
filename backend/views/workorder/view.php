<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Workorder */

$this->title = $model->workorder_no;
$this->params['breadcrumbs'][] = ['label' => 'ใบสั่งงาน', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="workorder-view">
    <br>

    <p>
        <?= Html::a('แก้ไข', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('ลบ', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
//            'id',
            'workorder_no',
            'workorder_date',
            'work_type',
            'worktrade_id',
            'suplier_id',
            'require_date',
            'workreq_id',
            'asset_id',
            'problem_desc',
            'estimate_start',
            'estimate_end',
            'actual_start',
            'actual_end',
            'handover_date',
            'downtime',
            'cost',
            'failure',
            'next_target_pm',
            'critical',
            'problem_action',
            'note',
            'pm_ref',
            'emp_admin',
            'workorder_status',
            'approve_by',
            'approve_date',
            'approve_reason',
            'created_at',
            'updated_at',
            'created_by',
            'updated_by',
        ],
    ]) ?>

</div>
