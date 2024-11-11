<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Assetgroup */

$this->title = 'สร้างกลุ่มเครื่องจักร';
$this->params['breadcrumbs'][] = ['label' => 'กลุ่มเครื่องจักร', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="assetgroup-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
