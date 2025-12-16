<?php
/** @var yii\web\View $this */
/** @var app\models\Post $post */

use yii\helpers\Html;
?>

<h1><?= Html::encode($post->title) ?></h1>

<p>
    <b>Категорія:</b>
    <?= $post->category
        ? Html::a(
            Html::encode($post->category->name),
            ['category/view', 'id' => $post->category->id]
        )
        : '<i>Без категорії</i>'
    ?>
</p>

<?php if (!empty($post->image)): ?>
    <p>
        <img
            src="<?= Yii::getAlias('@web') . '/uploads/' . Html::encode($post->image) ?>"
            alt="<?= Html::encode($post->title) ?>"
            style="max-width:400px; margin:15px 0;"
        >
    </p>
<?php endif; ?>

<p><?= nl2br(Html::encode($post->content)) ?></p>

<p>
    <b>Теги:</b>
    <?php foreach ($post->tags as $tag): ?>
        <?= Html::a(
            Html::encode($tag->name),
            ['tag/view', 'id' => $tag->id]
        ) ?>
    <?php endforeach; ?>
</p>

<h3>Коментарі</h3>

<?php foreach ($post->comments as $comment): ?>
    <p>
        <b><?= Html::encode($comment->author_name) ?>:</b>
        <?= Html::encode($comment->text) ?>
    </p>

    <?php foreach ($comment->replies as $reply): ?>
        <p style="margin-left:30px;">
            ↳ <b><?= Html::encode($reply->author_name) ?>:</b>
            <?= Html::encode($reply->text) ?>
        </p>
    <?php endforeach; ?>
<?php endforeach; ?>
