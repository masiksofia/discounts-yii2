<?php
use yii\helpers\Html;

/** @var $tag app\models\Tag */
/** @var $posts app\models\Post[] */
?>

<h1>Тег: <?= Html::encode($tag->name) ?></h1>

<?php if (empty($posts)): ?>
    <p><i>Немає записів з цим тегом</i></p>
<?php endif; ?>

<?php foreach ($posts as $post): ?>
    <h3>
        <?= Html::a(Html::encode($post->title), ['post/view', 'id' => $post->id]) ?>
    </h3>
    <p><?= mb_substr($post->content, 0, 150) ?>...</p>
<?php endforeach; ?>
