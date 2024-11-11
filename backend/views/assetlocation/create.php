<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Assetlocation */

$this->title = 'สร้างที่ตั้งเครื่องจักร์/อุปกรณ์';
$this->params['breadcrumbs'][] = ['label' => 'ที่ตั้ง', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="assetlocation-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
