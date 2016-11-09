<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
$stafferModel = Yii::$app->getModule('salary')->stafferModel;
$staffer = $stafferModel::find()->all();
var_dump($staffer);
/* @var $this yii\web\View */
/* @var $model app\modules\alexei1024\yii2cellery\models\SalaryToStaffer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="salary-to-staffer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'staffer_id')->textInput() ?>

    <?= $form->field($model, 'sold')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
   

</div>
