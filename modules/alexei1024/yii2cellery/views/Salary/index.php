<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\alexei1024\yii2cellery\models\SalaryToStafferSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Salary To Staffers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="salary-to-staffer-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Salary To Staffer', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'staffer_id',
            'sold',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
