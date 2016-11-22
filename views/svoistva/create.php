<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Svoistva */

$this->title = 'Create Svoistva';
$this->params['breadcrumbs'][] = ['label' => 'Svoistvas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="svoistva-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
