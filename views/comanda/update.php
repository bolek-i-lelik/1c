<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Comanda */


$this->title = 'Изменить: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Команда', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="comanda-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <img src="/img/<?= $model->image ?>">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
