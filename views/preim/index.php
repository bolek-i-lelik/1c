<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PreimSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Преимущества';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="preim-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'label' => 'Изображение',
                'format' => 'raw',
                'value' => function($data){
                    return Html::img(Url::toRoute('/img/'.$data->image),[
                        'alt'=>'yii2 - картинка в gridview',
                        'style' => 'width:90px;'
                    ]);
                },
            ],
            'title',
            'description',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
