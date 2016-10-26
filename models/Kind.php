<?php
namespace app\models;
class Kind extends \yii\db\ActiveRecord
{
    

    public static function tableName(){
        return 'kind';
    }
    public function attributeLabels(){
        return ['id'=>'id','name'=>'Имя'];
    }
    public function rules(){
        return [
        [['name'], 'string'],
        [['name'], 'required'],
        [['id'], 'integer'],
        ];
    }

}

