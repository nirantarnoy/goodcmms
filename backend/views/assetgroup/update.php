<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Assetgroup */

$this->title = 'แก้ไขกลุ่มเครื่องจักร: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'กลุ่มเครื่องจักร', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'แก้ไข';
?>
<div class="assetgroup-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
