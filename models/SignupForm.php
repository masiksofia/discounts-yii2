<?php
namespace app\models;

use yii\base\Model;
use Yii;

class SignupForm extends Model
{
    public $username;
    public $password;

    public function rules()
    {
        return [
            [['username', 'password'], 'required'],
            ['username', 'string', 'min' => 3, 'max' => 255],
            ['password', 'string', 'min' => 6],
        ];
    }

    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }

        $user = new User();
        $user->username = $this->username;
        $user->auth_key = Yii::$app->security->generateRandomString();
        $user->password_hash = Yii::$app->security->generatePasswordHash($this->password);

        return $user->save();
    }
}
