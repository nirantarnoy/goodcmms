<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Material */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'อะไหล่/Spare part', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="material-view">

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
            'code',
            'name',
            'standard_cost',
            'leadtime:datetime',
            'min_stock',
            'max_stock',
            'min_order',
            'max_order',
            'default_warehouse',
            'allow_negative',
            'critical_type',
            'unit',
            'manufacturer',
            'note',
            'all_qty',
            'average_cose',
            'type_id',
            'created_at',
        ],
    ]) ?>

</div>
