<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Articles $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="articles-form">

   <?php $form = ActiveForm::begin([
    'options' => ['enctype' => 'multipart/form-data']
]); ?>

<?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
<?= $form->field($model, 'description')->textarea(['rows' => 3]) ?>
<?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

<!-- поле для вибору файлу -->
<?= $form->field($model, 'file')->fileInput() ?>

<?= $form->field($model, 'date')->textInput() ?>

<div class="form-group">
    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
</div>

<?php ActiveForm::end(); ?>


</div>
