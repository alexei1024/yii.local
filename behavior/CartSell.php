<?php
namespace app\behavior;

use yii\base\Behavior;
use pistol88\cart\Cart;

class CartSell extends Behavior
{
    public $persent = 0;

    public function events()
    {
        return [
            Cart::EVENT_CART_COST => 'doSell'
        ];
    }

    public function doSell($event)
    {
        if($this->persent > 0 && $this->persent <= 100 && $event->cost > 100) {
            $event->cost = $event->cost-($event->cost*$this->persent)/100;
        }

        return $this;
    }
}