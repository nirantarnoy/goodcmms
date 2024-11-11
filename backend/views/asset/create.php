<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Asset */

$this->title = 'สร้างเครื่องจักร/อุปกรณ์';
$this->params['breadcrumbs'][] = ['label' => 'เครื่องจักร/อุปกร์', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asset-create">
    <?= $this->render('_form', [
        'model' => $model,
        'model_asset_photo' => $model_asset_photo,
    ]) ?>
</div>
