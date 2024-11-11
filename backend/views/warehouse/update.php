<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Warehouse */

$this->title = 'แก้ไขสโตร์: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'สโตร์', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'แก้ไข';
?>
<div class="warehouse-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
