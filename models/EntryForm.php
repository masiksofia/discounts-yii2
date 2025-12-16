<?php

namespace app\models;

use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules()
{
    return [
        // обов'язкові поля
        [['name', 'email'], 'required', 'message' => 'Поле не може бути порожнім.'],

        ['name', 'match', 'pattern' => '/^[A-Za-zА-Яа-яІіЇїЄєҐґ ]+$/u',
            'message' => 'Ім’я може містити тільки літери.'],

        // мінімальна довжина імені
        ['name', 'string', 'min' => 2, 'tooShort' => 'Ім’я має містити щонайменше 2 символи.'],

        // максимальна довжина
        ['name', 'string', 'max' => 50, 'tooLong' => 'Ім’я не може бути довше 50 символів.'],

        // валідація email
        ['email', 'email', 'message' => 'Невірний формат email-адреси.'],

        // максимальна довжина email
        ['email', 'string', 'max' => 100],
    ];
}

}
