<?php

namespace app\models;

use yii\db\ActiveRecord;

class Comment extends ActiveRecord
{
    public static function tableName()
    {
        return 'comment';
    }

    public function getReplies()
    {
        return $this->hasMany(Comment::class, ['parent_id' => 'id']);
    }
}
