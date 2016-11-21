<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Preim */

$this->title = 'Изменить: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Преимущества', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="preim-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <img src="/img/<?= $model->image ?>">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>


</div>
