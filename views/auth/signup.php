<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Register';
?>

<h1>Register</h1>

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'username') ?>
<?= $form->field($model, 'password')->passwordInput() ?>

<div class="form-group">
    <?= Html::submitButton('Sign up', ['class' => 'btn btn-success']) ?>
</div>

<?php ActiveForm::end(); ?>
