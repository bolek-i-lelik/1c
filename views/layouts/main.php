<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
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
        <div class="span3 bs-docs-sidebar">
            <ul class="nav nav-list bs-docs-sidenav affix">
                <li class = "logo"><img src="/img/logo.png"><br><img src="/img/ramicon.png"></li>
                <li><img src="/img/borderMain.png"><a href="#dropdowns">горячие <br>предложения</a></li>
                <li><img src="/img/borderMain.png"><a href="#buttonGroups"><i class="icon-chevron-right"></i>программное <br>обеспечение</a></li>
                <li><img src="/img/borderMain.png"><a href="#buttonDropdowns"><i class="icon-chevron-right"></i>подписки</a></li>
                <li><img src="/img/borderMain.png"><a href="#navs"><i class="icon-chevron-right"></i>услуги</a></li>
                <li><img src="/img/borderRazd.png"><a href="#navbar">наши партнеры</a></li>
                <li><img src="/img/borderMain.png"><a href="#breadcrumbs">почему мы</a></li>
                <li><img src="/img/borderMain.png"><a href="#pagination">сертификаты</a></li>
                <li><img src="/img/borderMain.png"><a href="#labels-badges">преимущества</a></li>
                <li><img src="/img/borderMain.png"><a href="#typography">команда</a></li>
                <li><img src="/img/_xcf.png"><a href="#thumbnails">калькулятор</a></li>
                <li><img src="/img/borderMain.png"><a href="#alerts">контакты</a><img src="/img/borderMain.png"></li>
                <li class="tel"><img src="/img/tel.png">  <p>8(812)</p><p class="colorText">336-48-30</p></li>

            </ul>
        </div>

        <div class="span9">
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
