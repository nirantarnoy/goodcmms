<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Worktype */

$this->title = 'สร้างประเภทงาน';
$this->params['breadcrumbs'][] = ['label' => 'ประเภทงาน', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="worktype-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
