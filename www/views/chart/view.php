<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Chart */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Charts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div style="margin: 0 15% 0 5%">
    <div class="chart-view">

        <h1><?= Html::encode($this->title) ?></h1>

        <p>
            <?= Html::a('Назад', ['chart/index'], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Добавить', ['chart/create'], ['class' => 'btn btn-success']) ?>
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
                'data_start',
                'time',
                'price',
                'visiting_days',
                'quantity',
            ],
        ]) ?>

</div>
</div>