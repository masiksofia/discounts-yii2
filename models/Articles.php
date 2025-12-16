<?php

namespace app\models;

use yii\db\ActiveRecord;
use yii\web\UploadedFile;

class Articles extends ActiveRecord
{
    public $file;

    public function rules()
    {
        return [
            [['title', 'description', 'content'], 'required'],
            [['content'], 'string'],
            [['date', 'created_at'], 'safe'],
            [['title', 'description', 'image'], 'string', 'max' => 255],

            // Правило для файлу
            [['file'], 'file', 'extensions' => 'png, jpg, jpeg, webp', 'skipOnEmpty' => true],
        ];
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {

            // Отримуємо файл
            $file = UploadedFile::getInstance($this, 'file');

            if ($file) {

                // Генеруємо ім'я
                $fileName = uniqid('img_') . '.' . $file->extension;

                // Фізичний шлях куди зберігати
                $path = \Yii::getAlias('@webroot/uploads/' . $fileName);

                // Зберігаємо файл
                if ($file->saveAs($path)) {
                    // Зберігаємо відносний шлях у БД
                    $this->image = 'uploads/' . $fileName;
                }
            }

            return true;
        }

        return false;
    }
}
