<?php
namespace app\services;
use \yii\base\Component;
use \app\interfaces\Cart;

class Cart2 extends Component implements Cart{
    public function put($data){ 
        //тут пишется в бд
    }
    public function truncate(){
        //удаляет все из бд
    }
    public function removeElement($id){
        
    }
    public function getElements(){
        //возвращаем все из бд
        return 'все работает';
    }
    public function GetElement($id){
        
    }
}