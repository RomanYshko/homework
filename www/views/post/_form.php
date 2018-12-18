<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Courses;

/* @var $this yii\web\View */
/* @var $model app\models\Post */
/* @var $form yii\widgets\ActiveForm */
?>

<div style="margin: 0 15% 0 5%">
    <div class="courses-form">

        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

        <?= $form->field($model, 'courses_id')->dropDownList(ArrayHelper::map(Courses::find()->all(), 'id', 'title')) ?>

        <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>


        <?= $form->field($model, 'course_description')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'course_program')->textarea(['rows' => 6])  ?>

        <?= $form->field($model, 'data_start')->textInput() ?>

        <?= $form->field($model, 'duration')->textInput() ?>

        <?= $form->field($model, 'price')->textInput() ?>

        <?= $form->field($model, 'free_places')->textInput() ?>

        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>
