<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SertificatesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Сертификаты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sertificates-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'label' => 'Отзыв',
                'format' => 'raw',
                'value' => function($data){
                    return Html::img(Url::toRoute('/img/'.$data->image),[
                        'alt'=>'yii2 - картинка в gridview',
                        'style' => 'width:120px;'
                    ]);
                },
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
