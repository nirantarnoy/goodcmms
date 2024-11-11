<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Asset */

$this->title = 'แก้ไขเครื่องจักร/อุปกรณ์: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'เครื่องจักร/อุปกรณ์', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'แก้ไข';
?>
<div class="asset-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
