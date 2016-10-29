<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\MyForm;
use app\models\Dog;
use app\behaviors\Test;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
    //тестовый экшн
    public function actionTest($var=1) 
    {
//        $aq = Dog::find()->where(['kind'=>'1'])->one()->kindm;
//        return $this->render('test', ['aq'=>$aq]);
       
    }
    public function actionTestnew(){
        $dog = new Dog;
      //  $dog->attachBehaviors('Test','app\behaviors\Test');
        $dog->getBlohCount();
        
        $dog->name = 'Ваня';
        $dog->validate();
    }

    public function actionMyform() {
            $model = new MyForm();
        if ($model->load(Yii::$app->request->post())){ 
        }                
        return $this->render('myform', ['model' => $model,]);
       
    }
    
    public function actionAdd(){
        $cart = yii::$app->cart1->put('Hello');
        //var_dump(yii::$app->cart1->getElements());
        return $this->render('add');
    }
    public function actionTruncate(){
        $cart = yii::$app->cart1->Truncate();
        //var_dump(yii::$app->cart1->getElements());
        return $this->render('add');
    }
}