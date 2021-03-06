<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Chart */

$this->title = 'Редактировать';
$this->params['breadcrumbs'][] = ['label' => 'График', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>

<div style="margin: 0 15% 0 5%">
    <div class="chart-update">

        <h1><?= Html::encode($this->title) ?></h1>

        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>

    </div>
</div>
