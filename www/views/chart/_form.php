<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Chart */
/* @var $form yii\widgets\ActiveForm */
?>
<div style="margin: 0 15% 0 5%">
    <div class="chart-form">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'data_start')->textInput() ?>

        <?= $form->field($model, 'time')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'price')->textInput() ?>

        <?= $form->field($model, 'visiting_days')->textInput() ?>

        <?= $form->field($model, 'quantity')->textInput() ?>

        <div class="form-group">
            <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>