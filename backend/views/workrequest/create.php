<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Workrequest */

$this->title = 'สร้างคำร้องแจ้งซ่อม';
$this->params['breadcrumbs'][] = ['label' => 'คำร้องแจ้งซ่อม', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="workrequest-create">
            <?= $this->render('_form', [
                'model' => $model,
                'runno'=> $runno,
            ]) ?>
</div>
