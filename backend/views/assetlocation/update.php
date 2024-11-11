<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Assetlocation */

$this->title = 'แก้ไขที่ตั้งเครื่องจักร/อุปกรณ์: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'ที่ตั้ง', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'แก้ไช';
?>
<div class="assetlocation-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
