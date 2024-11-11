<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Failure */

$this->title = 'แก้ไขหัวข้อความผิดพลาด: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'หัวข้อความผิดพลาด', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'แก้ไช';
?>
<div class="failure-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
