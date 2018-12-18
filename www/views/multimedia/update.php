<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Multimedia */

$this->title = 'Update Multimedia: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Multimedia', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div style="margin: 0 15% 0 5%">
    <div class="multimedia-update">

        <h1><?= Html::encode($this->title) ?></h1>

        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>

    </div>
</div>
