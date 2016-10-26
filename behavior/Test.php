<?php 

namespace app\behavior; 

use yii; 
use yii\base\Behavior; 
use yii\db\ActiveRecord; 

class Test extends Behavior{
    public function getBlohCount(){
        return [ 
        'Test' => [ 
        'class' => 'app\behaviors\Test', 
        'maxsize' => 6  
        ] 
        ]; 
    }
    
    public function events(){
    return[
        ActiveRecord::EVENT_AFTER_VALIDATE => 'Test'
    ];
    
    }
    public function Test($event){
        var_dump($this->owner);
    }
    
    
}