<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Asset */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'เครื่องจักร/อุปกรณ์', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="asset-view">


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
            'asset_no',
            'asset_name',
            'description',
            'asset_group_id',
            'site_id',
            'department_id',
            'section_id',
            'asset_location_id',
            'critical',
            'manufacturer',
            'brand',
            'asset_model',
            'asset_cat_id',
            'asset_status',
            'responsible',
            'note',
            'created_at',
            'updated_at',
            'created_by',
            'updated_by',
        ],
    ]) ?>

</div>
