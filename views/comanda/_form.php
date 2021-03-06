<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Comanda */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="comanda-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'familia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nameandotec')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dolzhnost')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    <a href="foto?id=<?= $model->id ?>"><button type="button" class="btn btn-success">Изменить изображение</button></a>

</div>
