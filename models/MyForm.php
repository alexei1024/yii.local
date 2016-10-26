<?php

namespace app\models;
use Yii;
use yii\base\Model;


class MyForm extends Model
{
    public $name;
    public $email;
    public $textArea;
    public $radioButtonList;
    public $checkbox;
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'email', 'textArea','radioButtonList'], 'required'],
            //[['checkbox'] => 'checked'],
            array('checkbox', 'compare', 'compareValue' => 1, 'message' => 'Вы должны быть согласны нажать чекбокс - для того чтобы нажать этот чекбокс'),
            // email has to be a valid email address
            ['email', 'email'],
            // verifyCode needs to be entered correctly
        ];
    }
 
}