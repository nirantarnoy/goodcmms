<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Assetbrand $model */

$this->title = 'แก้ไขยี่ห้ออุปกรณ์: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'ยี่ห้ออุปกรณ์', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'แก้ไข';
?>
<div class="assetbrand-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
