<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Purchreq */

$this->title = 'Create Purchreq';
$this->params['breadcrumbs'][] = ['label' => 'Purchreqs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="purchreq-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
