<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Workorder */

$this->title = 'แก้ไขคำสั่งแจ้งซ่อม: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'คำสั่งแจ้งซ่อม', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'แก้ไข';
?>
<div class="workorder-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
