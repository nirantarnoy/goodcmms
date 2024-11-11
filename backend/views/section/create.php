<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Section */

$this->title = 'สร้างแผนก';
$this->params['breadcrumbs'][] = ['label' => 'แผนก', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="section-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
