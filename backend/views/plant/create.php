<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Plant */

$this->title = 'Create Plant';
$this->params['breadcrumbs'][] = ['label' => 'องค์กร', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="plant-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
