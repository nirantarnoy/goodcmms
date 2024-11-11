<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Plant */

$this->title = 'แก้ไขข้อมูลบริษัท: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'องค์กร', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'แก้ไข';
?>
<div class="plant-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
