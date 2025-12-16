<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->registerCssFile('@web/css/post.css');
?>

<h1>Пости</h1>

<?php foreach ($posts as $post) : ?>
    <div class="post-card">
        <h2 class="post-title"><?= Html::encode("{$post->title}") ?></h2>
        <p class="post-text"><?= Html::encode("{$post->content}") ?></p>

        <?php if ($post->published) : ?>
            <p class="post-date">Дата публікації: <?= $post->published_at ?></p>
        <?php endif; ?>
    </div>
<?php endforeach; ?>

<?= LinkPager::widget(['pagination' => $pagination]) ?>
