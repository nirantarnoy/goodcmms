<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Workrequest */

$this->title = 'แก้ไขคำร้องแจ้งซ่อม: ' . $model->workreq_no;
$this->params['breadcrumbs'][] = ['label' => 'คำร้องแจ้งซ่อม', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'แก้ไข';
?>
<div class="workrequest-update">
            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>
</div>
