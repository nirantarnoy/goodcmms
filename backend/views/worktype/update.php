<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Worktype */

$this->title = 'แก้ไขประเภทงาน: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'ประเภทงาน', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'แก้ไช';
?>
<div class="worktype-update">
            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>
</div>
