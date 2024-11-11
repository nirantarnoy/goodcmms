<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Pmschedule */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pmschedules', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pmschedule-view">


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
            'asset_id',
            'pm_type',
            'pm_for',
            'worktrade_id',
            'worktype_id',
            'suplier_id',
            'pm_location_id',
            'pm_section_id',
            'pm_department_id',
            'generate_type',
            'task_id',
            'frequency_unit',
            'frequency',
            'days',
            'period_day',
            'target_start',
            'target_end',
            'next_target_start',
            'status',
            'note',
            'created_at',
            'updated_at',
            'created_by',
            'updated_by',
        ],
    ]) ?>

</div>
