<?php

namespace app\models;
use yii\base\Model;

class TestForm extends Model
{
    public $name;
    public $email;
    public $text;
    
    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'email'=> 'E-mail',
            'text' => 'Текст сообщения',
        ];
    }
    
    public function rules()
    {
        return [
            [['name','email'], 'required'],
            ['email','email'],
            //['name', 'string' , 'min' => 2, 'tooShort'=> 'Wrong'],
            //['name', 'string' , 'max' => 11, 'tooLong'=> 'Very Long =)'],
            [ 'name', 'string', 'length' => [2,5] ],
            [ 'name', 'myRule' ],
            [ 'text', 'trim' ],
        ];
    }
    
    public function myRule($attrs)
    {
        if(!in_array($this->attrs, ['Hello', 'world'])){
            $this->addError($attrs, 'Wrong name');
        }
    }
        
}