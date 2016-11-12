<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Whywe */

$this->title = 'Создать';
$this->params['breadcrumbs'][] = ['label' => 'Почему мы?', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="whywe-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
