<?php
namespace app\controllers;

use yii\web\Controller;
use app\models\Tag;
use yii\web\NotFoundHttpException;

class TagController extends Controller
{
    public function actionView($id)
    {
        $tag = Tag::findOne($id);
        if (!$tag) {
            throw new NotFoundHttpException('Тег не знайдено');
        }

        $posts = $tag->posts;

        return $this->render('view', [
            'tag' => $tag,
            'posts' => $posts,
        ]);
    }
}
