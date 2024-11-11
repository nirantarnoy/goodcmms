<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Warehouse */

$this->title = 'สร้างสโตร์';
$this->params['breadcrumbs'][] = ['label' => 'สโตร์', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="warehouse-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
