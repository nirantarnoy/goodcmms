<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Material */

$this->title = 'สร้างรหัสอะไหล่';
$this->params['breadcrumbs'][] = ['label' => 'อะไหล่/Spare part', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="section-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
