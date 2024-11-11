<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Workorder */

$this->title = 'สร้างคำสั่งแจ้งซ่อม';
$this->params['breadcrumbs'][] = ['label' => 'คำสั่งแจ้งซ่อม', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="workorder-create">
            <?= $this->render('_form', [
                'model' => $model,
                'runno' => $runno,
            ]) ?>
</div>
