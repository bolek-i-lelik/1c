<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Otzivi */

$this->title = 'Создать';
$this->params['breadcrumbs'][] = ['label' => 'Отзывы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="otzivi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    	<?= $form->field($model, 'imageFile')->fileInput() ?>

    	<button class="btn btn-success">Cохранить</button>

	<?php ActiveForm::end() ?>

    

</div>
