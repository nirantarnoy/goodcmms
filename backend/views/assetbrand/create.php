<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Assetbrand $model */

$this->title = 'สร้างยี่ห้ออุปกรณ์';
$this->params['breadcrumbs'][] = ['label' => 'ยี่ห้ออุปกรณ์', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="assetbrand-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
