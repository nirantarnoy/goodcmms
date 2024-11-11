<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Tasklist */

$this->title = 'สร้างงาน';
$this->params['breadcrumbs'][] = ['label' => 'งาน', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tasklist-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
