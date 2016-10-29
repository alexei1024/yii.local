<?php

use yii\helpers\Html;
use yii\grid\GridView;
use \app\widgets\Mymegawidget;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Vitamines';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vitamine-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Vitamine', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= Mymegawidget::widget(['limitRecords'=>5]);?>
    <br><br><br><br><br>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'name',
            'barcode',
            'description',
            'condition_vitamine',
            // 'weight',
            // 'count',
            // 'date',
            // 'color_id',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
