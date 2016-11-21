<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PartnersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Наши партнеры';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="partners-index">

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
                'label' => 'Логотип',
                'format' => 'raw',
                'value' => function($data){
                    return Html::img(Url::toRoute('/img/'.$data->logo),[
                        'alt'=>'yii2 - картинка в gridview',
                        'style' => 'width:250px;'
                    ]);
                },
            ],
            //'param1',
            //'param2',
            //'param3',
            // 'param4',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
