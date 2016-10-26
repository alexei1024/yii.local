<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\vitamine */

$this->title = 'Create Vitamine';
$this->params['breadcrumbs'][] = ['label' => 'Vitamines', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vitamine-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
