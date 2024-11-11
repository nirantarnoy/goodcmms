<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Pmschedule */

$this->title = 'สร้างแผนงาน';
$this->params['breadcrumbs'][] = ['label' => 'แผนงาน', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pmschedule-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
