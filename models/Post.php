<?php

namespace app\models;

use yii\db\ActiveRecord;

class Post extends ActiveRecord
{
    public static function tableName()
    {
        return 'post';
    }

    public function getCategory()
{
    return $this->hasOne(Category::class, ['id' => 'category_id']);
}
    public function getComments()
    {
        return $this->hasMany(Comment::class, ['post_id' => 'id'])
            ->where(['parent_id' => null]);
    }

    public function getTags()
{
    return $this->hasMany(Tag::class, ['id' => 'tag_id'])
        ->viaTable('post_tag', ['post_id' => 'id']);
}
}
