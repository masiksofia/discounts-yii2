<?php
use yii\helpers\Html;

$this->title = 'Підтвердження';
?>

<style>
.confirm-box {
    max-width: 500px;
    margin: 40px auto;
    padding: 25px;
    background: #e8f5e9;
    border-left: 6px solid #4caf50;
    border-radius: 8px;
}
.confirm-box h3 {
    margin-bottom: 15px;
    color: #2e7d32;
}
</style>

<div class="confirm-box">
    <h3>Ви вказали наступну інформацію:</h3>

    <ul>
        <li><strong>Ім’я:</strong> <?= Html::encode($model->name) ?></li>
        <li><strong>Email:</strong> <?= Html::encode($model->email) ?></li>
    </ul>
</div>
