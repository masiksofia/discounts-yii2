<?php
namespace app\controllers;

use yii\web\Controller;
use app\models\Category;
use yii\web\NotFoundHttpException;

class CategoryController extends Controller
{
    public function actionView($id)
    {
        $category = Category::findOne($id);
        if (!$category) {
            throw new NotFoundHttpException('Категорію не знайдено');
        }

        $posts = $category->posts;

        return $this->render('view', [
            'category' => $category,
            'posts' => $posts,
        ]);
    }
}
