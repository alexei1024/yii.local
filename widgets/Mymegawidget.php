<?php
namespace app\widgets;
use app\models\Vitamine;
use \app\assets\AppMyAssets;

class Mymegawidget extends \yii\base\Widget{
    public $limitRecords = null;
    
    public function init() {
        parent::init();
        if($this->limitRecords == null){
            $this->limitRecords = 5;     
        }
        AppMyAssets::register($this->getView());
        return true;
    }
    public function run() {
        $vitaminka = Vitamine::find()->limit($this->limitRecords)->all();
        return $this->render('list', ['vitaminka' => $vitaminka]);
        
        
        
    }
}