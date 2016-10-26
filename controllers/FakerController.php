<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Dog;

class FakerController extends Controller
{
    //тестовый экшн
    public function actionDo($var=90) 
    {

        
//        $genderdog = ['Мальчик','Девочка'];
//        $kinddog = ['Пудель','Шарпей','Доберман'];
//        $namedog = ['миша','Алекс','Витя','Даниэль'];
//        for ($i=0;$i < $var; $i++){
//        $dog = new Dog();
//            $dog->gender = $genderdog[array_rand($genderdog)];
//            $dog->kind = $kinddog[array_rand($kinddog)];
//            $dog->name = $namedog[array_rand($namedog)];
//            $dog->save();
//        }
        foreach($dogkill = Dog::find()->OrderBy('rand()')->limit(20)->all() as $value){
            $value->delete();
            
        }
         
       //return $this->render('faker'); 
    }
    
}