<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Failure */

$this->title = 'สร้างรหัสข้อผิดพลาด';
$this->params['breadcrumbs'][] = ['label' => 'หัวข้อความผิดพลาด', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="failure-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
