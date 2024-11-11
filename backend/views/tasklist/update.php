<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Tasklist */

$this->title = 'แก้ไขงาน: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'งาน', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'แก้ไข';
?>
<div class="tasklist-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
