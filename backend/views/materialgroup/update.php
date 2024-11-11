<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Materialgroup $model */

$this->title = 'แก้ไขกลุ่มอุปกรณ์/เครื่องจักร: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'กลุ่มอุปกรณ์/เครื่องจักร', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'แก้ไข';
?>
<div class="materialgroup-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
