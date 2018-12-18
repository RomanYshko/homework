<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Courses */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Курсы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div style="margin: 0 15% 0% 5%">
    <div class="courses-view">

        <h1><?= Html::encode($this->title) ?></h1>

        <p>
            <?= Html::a('Назад', ['courses/index'], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Добавить', ['courses/create'], ['class' => 'btn btn-success']) ?>
            <?= Html::a('Редоктировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Удалит', ['delete', 'id' => $model->id], [
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
                'data',
                'time',
                'price',
                'meta_teg',
                'meta_description',
                'img',
            ],
        ]) ?>

    </div>
</div>
