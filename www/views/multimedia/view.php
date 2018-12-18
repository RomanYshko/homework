<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Multimedia */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Multimedia', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div style="margin: 0 15% 0 5%">
    <div class="multimedia-view">

        <h1><?= Html::encode($this->title) ?></h1>

        <p>
            <?= Html::a('Назад', ['multimedia/index'], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Добавить', ['multimedia/create'], ['class' => 'btn btn-success']) ?>
            <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ]) ?>
        </p>

        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                'id',
                'title',
                'img',
            ],
        ]) ?>

    </div>
</div>
