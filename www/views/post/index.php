<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Posts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div style="margin: 0 15% 0 5%">
<div class="post-index">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Post', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'courses_id',
            'title',
//            'img',
//            'course_description:ntext',
            //'course_program',
            //'data_start',
            //'duration',
            //'price',
            //'free_places',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
</div>