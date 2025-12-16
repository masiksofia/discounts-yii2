<?php
use yii\helpers\Html;

/** @var $category app\models\Category */
/** @var $posts app\models\Post[] */
?>

<h1>Категорія: <?= Html::encode($category->name) ?></h1>

<?php if (empty($posts)): ?>
    <p><i>У цій категорії поки немає записів</i></p>
<?php endif; ?>

<?php foreach ($posts as $post): ?>
    <h3>
        <?= Html::a(Html::encode($post->title), ['post/view', 'id' => $post->id]) ?>
    </h3>
    <p><?= mb_substr($post->content, 0, 150) ?>...</p>
<?php endforeach; ?>
