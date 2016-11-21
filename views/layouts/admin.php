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
        <div class="col-lg-3 col-md-3 col-sm-4 bs-docs-sidebar hidden-xs">
            <center>
                <ul class="nav nav-list bs-docs-sidenav affix">
                    <li><center><img src="/img/logo.png"><br><img src="/img/ramicon.png"></center><br/></li>
                    <li><img src="/img/borderMain.png"><a href="<?= Url::toRoute('/firepred/index', true); ?>">ГОРЯЩИЕ ПРЕДЛОЖЕНИЯ</a></li>
                    <li><img src="/img/borderMain.png"><a href="<?= Url::toRoute('/products/index', true); ?>">ПРОДУКТЫ</a></li>
                    <li><img src="/img/borderMain.png"><a href="<?= Url::toRoute('/podpiski/index', true); ?>">ПОДПИСКИ</a></li>
                    <li><img src="/img/borderMain.png"><a href="<?= Url::toRoute('/uslugi/index', true); ?>">УСЛУГИ</a></li>
                    <li><img src="/img/borderMain.png"><a href="<?= Url::toRoute('/partners/index', true); ?>">НАШИ ПАРТНЕРЫ</a></li>
                    <li><img src="/img/borderMain.png"><a href="<?= Url::toRoute('/sertificates/index', true); ?>">СЕРТИФИКАТЫ</a></li>
                    <li><img src="/img/borderMain.png"><a href="<?= Url::toRoute('/preim/index', true); ?>">ПРЕИМУЩЕСТВА</a></li>
                    <li><img src="/img/borderMain.png"><a href="<?= Url::toRoute('/comanda/index', true); ?>">КОМАНДА</a></li>
                    <li><img src="/img/borderMain.png"><a href="<?= Url::toRoute('/otzivi/index', true); ?>">ОТЗЫВЫ</a></li>
                    <li><img src="/img/borderMain.png"><a href="<?= Url::toRoute('/contacts/index', true); ?>">КОНТАКТЫ</a><img src="/img/borderMain.png"></li>
                    <li class="hb-but hb-but-login hb-but-main">
                        <!--<input id="hb-but-login" class="j_hcb j_off" type="checkbox">-->
                        <label for="hb-but-login">
                            <span class="hb-but-wrap">
                                <form class="navbar-form" style="height: 50px;" action="/site/logout" method="post">
                                    <input type="hidden" name="_csrf" value="<meta name="csrf-param" content="_csrf">
                                    <meta name="csrf-token" content="d0JocWdMcnAzAyEyPgQZBg4wJh03IzEKIhAmOyZhSyE/AQk5JT0KHQ==">
                                    <button type="submit" style="color:red;" class="btn btn-link"><b>Выйти</b></button>
                                </form>
                            </span>
                        </label>
                    </li>
                    <li></li>
                </ul>
            </center>
        </div>
        <div class="visible-xs">
            <nav class="navbar navbar-default" role="navigation">
                <!--<div class="container">-->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand"><img src="/img/ramicon.png"></a>
                    </div>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><img src="/img/borderMain.png"><a href="<?= Url::toRoute('/firepred/index', true); ?>">ГОРЯЩИЕ ПРЕДЛОЖЕНИЯ</a></li>
                            <li><img src="/img/borderMain.png"><a href="<?= Url::toRoute('/products/index', true); ?>">ПРОДУКТЫ</a></li>
                            <li><img src="/img/borderMain.png"><a href="<?= Url::toRoute('/podpiski/index', true); ?>">ПОДПИСКИ</a></li>
                            <li><img src="/img/borderMain.png"><a href="<?= Url::toRoute('/uslugi/index', true); ?>">УСЛУГИ</a></li>
                            <li><img src="/img/borderMain.png"><a href="<?= Url::toRoute('/partners/index', true); ?>">НАШИ ПАРТНЕРЫ</a></li>
                            <li><img src="/img/borderMain.png"><a href="<?= Url::toRoute('/whywe/index', true); ?>">ПОЧЕМУ МЫ</a></li>
                            <li><img src="/img/borderMain.png"><a href="<?= Url::toRoute('/sertificates/index', true); ?>">СЕРТИФИКАТЫ</a></li>
                            <li><img src="/img/borderMain.png"><a href="<?= Url::toRoute('/preim/index', true); ?>">ПРЕИМУЩЕСТВА</a></li>
                            <li><img src="/img/borderMain.png"><a href="<?= Url::toRoute('/comanda/index', true); ?>">КОМАНДА</a></li>
                            <li><img src="/img/borderMain.png"><a href="<?= Url::toRoute('/otzivi/index', true); ?>">ОТЗЫВЫ</a></li>
                            <li><img src="/img/borderMain.png"><a href="<?= Url::toRoute('/tags/index', true); ?>">ОБЛАКО ТЭГОВ</a></li>
                            <li><img src="/img/borderMain.png"><a href="<?= Url::toRoute('/contacts/index', true); ?>">КОНТАКТЫ</a><img src="/img/borderMain.png"></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                <!--</div>-->
            </nav>
        </div>

        <div class="col-lg-9  col-md-9 col-sm-8">
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