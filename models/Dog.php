<?php
namespace app\models;
class Dog extends \yii\db\ActiveRecord
{
    
    public function reduction(Dog $dog){
        if ($dog->gender = $this->gender) {
            return clone $this;
        }
    }
    public static function tableName(){
        return 'dog';
    }
    public function attributeLabels(){
        return ['id'=>'id','gender'=>'Пол','kind'=>'Порода','name'=>'Имя'];
    }
    public function rules(){
        return [
        [['gender', 'kind', 'name'], 'string'],
        [['kind', 'name'], 'required'],
        [['id'], 'integer'],
        ];
    }
    public function getKindm(){
         return $this->hasOne('\app\models\Kind', ['id'=>'kind']);
    }
    public function behaviors(){
        return ['Test'=>'app\behavior\Test'];
    }
}

