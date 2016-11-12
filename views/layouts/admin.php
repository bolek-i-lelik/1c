<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>

    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="container">
    <div class="row">
        <div class="col-lg-3 bs-docs-sidebar">
            <ul class="nav nav-list bs-docs-sidenav affix">
                <li><img src="/img/logo.png"></li>
                <li><a href="<?= Url::toRoute('/firepred/index', true); ?>">ГОРЯЩИЕ ПРЕДЛОЖЕНИЯ</a></li>
                <li><a href="<?= Url::toRoute('/products/index', true); ?>">ПРОДУКТЫ</a></li>
                <li><a href="#buttonDropdowns">ПОДПИСКИ</a></li>
                <li><a href="#navs">УСЛУГИ</a></li>
                <li><a href="#navbar">НАШИ ПАРТНЕРЫ</a></li>
                <li><a href="#breadcrumbs">ПОЧЕМУ МЫ</a></li>
                <li><a href="#pagination">СЕРТИФИКАТЫ</a></li>
                <li><a href="#labels-badges">ПРЕИМУЩЕСТВА</a></li>
                <li><a href="#typography">КОМАНДА</a></li>
                <li><a href="#thumbnails">ОТЗЫВЫ</a></li>
                <li><a href="#thumbnails">ОБЛАКО ТЭГОВ</a></li>
                <li><a href="#alerts">КОНТАКТЫ</a></li>

            </ul>
        </div>

        <div class="col-lg-9">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= $content ?>
        </div>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>