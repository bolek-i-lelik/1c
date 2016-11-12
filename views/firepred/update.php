<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Firepred */

$this->title = 'Изменить: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Горящие предложения', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="firepred-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
