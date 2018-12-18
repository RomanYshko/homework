<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Courses */
/* @var $form yii\widgets\ActiveForm */
?>

<div style="margin: 0 15% 0 5%">
    <div class="courses-form">

        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

        <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'data')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'time')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'price')->textInput() ?>

        <?= $form->field($model, 'meta_teg')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'meta_description')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'img')->fileInput() ?>

        <div class="form-group">
            <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>
