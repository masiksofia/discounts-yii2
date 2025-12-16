<?php

namespace app\models;

use yii\db\ActiveRecord;

class Tag extends ActiveRecord
{
    public static function tableName()
    {
        return 'tag';
    }

    public function getPosts()
    {
        return $this->hasMany(Post::class, ['id' => 'post_id'])
            ->viaTable('post_tag', ['tag_id' => 'id']);
    }
}
