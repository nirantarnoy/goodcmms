<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Location */

$this->title = 'แก้ไขล๊อค: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'ล๊อค', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'แก้ไข';
?>
<div class="location-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
