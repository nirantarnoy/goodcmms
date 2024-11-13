<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Tasklist */

$this->title = 'สร้างรายการตรวจเช็ค (Tasklist)';
$this->params['breadcrumbs'][] = ['label' => 'รายการตรวจเช็ค', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tasklist-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
