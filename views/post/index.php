<?php
/** @var yii\web\View $this */
/** @var app\models\Post[] $posts */

use yii\helpers\Html;
?>

<h1>Знижки в магазинах</h1>

<?php foreach ($posts as $post): ?>
    <div style="margin-bottom:25px;">

        <?php if (!empty($post->image)): ?>
            <img
                src="<?= Yii::getAlias('@web') . '/uploads/' . Html::encode($post->image) ?>"
                alt="<?= Html::encode($post->title) ?>"
                style="max-width:150px; display:block; margin-bottom:10px;"
            >
        <?php endif; ?>

        <h3>
            <?= Html::a(
                Html::encode($post->title),
                ['post/view', 'id' => $post->id]
            ) ?>
        </h3>

        <p>
            Категорія:
            <?= $post->category
                ? Html::encode($post->category->name)
                : 'Без категорії'
            ?>
        </p>

        <p>
            <?= Html::encode(mb_substr($post->content, 0, 120)) ?>...
        </p>

    </div>
<?php endforeach; ?>
