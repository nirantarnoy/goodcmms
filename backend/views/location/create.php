<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Location */

$this->title = 'สร้างล๊อค';
$this->params['breadcrumbs'][] = ['label' => 'ล๊อค', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="location-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
