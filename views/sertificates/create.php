<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Sertificates */

$this->title = 'Добавить';
$this->params['breadcrumbs'][] = ['label' => 'Сертификаты', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sertificates-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
