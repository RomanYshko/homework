<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluide bg-light-grey">
    <div class="container">

        <div class="row">
            <div class="col-lg-4 col-lg-offset-4">
                <div class="tabs-for-sign-in-up">
                </div>
                <?php $form = ActiveForm::begin([
                    'id' => 'login-form',
                    'layout' => 'horizontal',
                    'fieldConfig' => [
                        'template' => "{label}\n<div class=\"col-lg-12\">{input}</div>\n<div class=\"col-lg-10\">{error}</div>",
                        'labelOptions' => ['class' => 'col-lg-10 control-label'],
                    ],
                ]); ?>

                <?= $form->field($model, 'username')->textInput(['placeholder' => "Логин"], ['autofocus' => true]) ?>

                <?= $form->field($model, 'password')->passwordInput( ['placeholder' => "Пароль"]) ?>



                <div class="form-group">
                    <div style="margin-top: 0" class="form-group for-submit">
                        <?= Html::submitButton('Войти', ['class' => 'btn btn-danger btn-sign center-block', 'name' => 'login-button']) ?>
                    </div>
                </div>

                <?php ActiveForm::end(); ?>



            </div>
        </div>
    </div>
    <div style="margin-bottom: 5%"></div>
