<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Material */

$this->title = 'แก้ไขรหัสอะไหล่: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'อะไหล่/Spare part', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'แก้ไข';
?>
<div class="section-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

