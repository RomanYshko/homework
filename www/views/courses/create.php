<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Courses */

$this->title = 'Новый курс';
$this->params['breadcrumbs'][] = ['label' => 'Courses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div style="margin: 0 15% 0 5%">
    <div class="courses-create">

        <h1><?= Html::encode($this->title) ?></h1>

        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>

    </div>
</div>
