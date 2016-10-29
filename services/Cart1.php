<?php
namespace app\services;
use \yii\base\Component;
use \app\interfaces\Cart;

class Cart1 extends Component implements Cart{
    public function __construct(app\interfaces\Cart $element) {
        
    }

    public function put($data){ 
        $_SESSION['Cart'][]=$data;
    }
    public function truncate(){
        unset($_SESSION['Cart']);
    }
    public function removeElement($id){
        
    }
    public function getElements(){
        return $_SESSION['Cart'];
    }
    public function GetElement($id){
        
    }
}