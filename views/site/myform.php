<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\db

?>
 <div class="row">
    <div class="col-lg-5">
        <?php $form = ActiveForm::begin(['id' => 'myform-form']);
        echo $form->field($model, 'name');
        echo $form->field($model, 'email');
        echo $form->field($model, 'textArea')->textArea(['rows' => '6']);
        echo $form->field($model, 'radioButtonList')
            ->radioList([
            '1' => 'Первый',
            '2' => 'Второй',
            '3' => 'Третий'
            ]);
        echo $form->field($model, 'checkbox')->checkbox(['label' => 'Я согласен нажать этот чекбокс']);
        echo Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'myform-button']);
        ActiveForm::end(); ?>
    </div>
</div>

