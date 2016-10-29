<?php

namespace app\controllers;

use Yii;
use app\models\Car;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;


class CarController extends Controller
{   
        protected function findModel($id)
    {
        if (($model = car::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
        public function actionIndex() 
    {
//            $car = new Car();
//            $car->name = 'name';
//            $car->count = rand(1,100);
//            $car->price = rand(1,100);
//            $car->save();
            $dataProvider = new ActiveDataProvider([
            'query' => car::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
        }
        public function actionAdd()
    {
        $car = Car::find()->limit(1)->one();
//        $car->attachBehaviors('Car','app\behaviors\CartSell');
//        $car->doSell;
        //Кладем ее в корзину (в количестве 1, без опций)
        $cartElement = yii::$app->cart->put($car, 1, []);
        //$car->doCartSell();
        return $this->redirect('/web/index.php?r=car/index');
    }
        
}
