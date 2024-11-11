<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Materialgroup $model */

$this->title = 'สร้างกลุ่มอุปกรณ์/เครื่องจักร';
$this->params['breadcrumbs'][] = ['label' => 'กลุ่มอุปกรณ์/เครื่องจักร', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="materialgroup-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
