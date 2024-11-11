<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Pmschedule */

$this->title = 'แก้ไขแผนงาน: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'แผนงาน', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'แก้ไช';
?>
<div class="pmschedule-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
