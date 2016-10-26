<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\vitamine */

$this->title = 'Update Vitamine: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Vitamines', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="vitamine-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
