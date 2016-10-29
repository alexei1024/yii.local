<?php

use yii\helpers\Html;
use app\models\Car;
use yii\grid\GridView;
use pistol88\cart\widgets\BuyButton;
use pistol88\cart\widgets\TruncateButton;
use pistol88\cart\widgets\CartInformer;
use pistol88\cart\widgets\ElementsList;
use pistol88\cart\widgets\DeleteButton;
use pistol88\cart\widgets\ChangeCount;
use pistol88\cart\widgets\ChangeOptions;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Car';
$this->params['breadcrumbs'][] = $this->title;
?>
<?= TruncateButton::widget(); ?>
<?=ElementsList::widget(['type' => ElementsList::TYPE_DROPDOWN]);?>
<?= CartInformer::widget(['htmlTag' => 'a', 'offerUrl' => '/?r=cart', 'text' => '{c} на {p}']); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'count',
            'price',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
