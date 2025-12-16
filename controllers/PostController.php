<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Post;

class PostController extends Controller
{
    public function actionIndex()
    {
        $posts = Post::find()
            ->orderBy(['created_at' => SORT_DESC])
            ->all();

        return $this->render('index', [
            'posts' => $posts
        ]);
    }

    public function actionView($id)
    {
        $post = Post::findOne($id);

        return $this->render('view', [
            'post' => $post
        ]);
    }
}
