<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Форма користувача';
?>

<style>
.form-box {
    max-width: 450px;
    margin: 40px auto;
    padding: 25px;
    border-radius: 10px;
    background: #f7f7f7;
    box-shadow: 0 0 15px rgba(0,0,0,0.1);
}
.form-box h2 {
    margin-bottom: 20px;
    text-align: center;
    color: #333;
}
.btn-submit {
    width: 100%;
    padding: 10px;
    font-size: 16px;
}
</style>

<div class="form-box">
    <h2>Введіть свої дані</h2>

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'name')->textInput(['placeholder' => 'Введіть ім’я']) ?>

        <?= $form->field($model, 'email')->textInput(['placeholder' => 'example@gmail.com']) ?>

        <div class="form-group">
            <?= Html::submitButton('Надіслати', ['class' => 'btn btn-primary btn-submit']) ?>
        </div>

    <?php ActiveForm::end(); ?>
</div>
