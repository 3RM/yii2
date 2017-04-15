<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<h1>actionIndex</h1>

<?php

//varDebug($arr);
//\app\controllers\AppController::varDebug(Yii::$app);
//debug(Yii::$app);
//var_dump($model);
?>

<?php $form = ActiveForm::begin(['options'=>['class'=>'form-horizontal','id'=>'test-form']]) ?>
    <?= $form->field($model, 'name')->input('text'); ?>
    <?= $form->field($model, 'email')->input('email'); ?>
    <?= $form->field($model, 'text')->textarea(['rows'=> 5]); ?>
    <?= Html::submitButton('Отправить',['class'=> 'btn btn-success']) ?>
<?php ActiveForm::end() ?>
