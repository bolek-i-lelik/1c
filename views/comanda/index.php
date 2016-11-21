<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ComandaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */


$this->title = 'Команда';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comanda-index">

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

            [
                'label' => 'Фотография',
                'format' => 'raw',
                'value' => function($data){
                    return Html::img(Url::toRoute('/img/'.$data->image),[
                        'alt'=>'yii2 - картинка в gridview',
                        'style' => 'width:90px;'
                    ]);
                },
            ],
            'familia',
            'nameandotec',
            'dolzhnost',
            'email:email',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
