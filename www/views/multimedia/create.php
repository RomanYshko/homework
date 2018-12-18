<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Multimedia */

$this->title = 'Добавить фото';
$this->params['breadcrumbs'][] = ['label' => 'Multimedia', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div style="margin: 0 15% 0 5%">
    <div class="multimedia-create">

        <h1><?= Html::encode($this->title) ?></h1>

        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>

    </div>
</div>
