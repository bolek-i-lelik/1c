<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Firepred */

$this->title = 'Создать';
$this->params['breadcrumbs'][] = ['label' => 'Горящие предложения', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="firepred-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
