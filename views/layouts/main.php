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
    
<script src="https://use.fontawesome.com/e2d41fd859.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js" type="text/javascript"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js" type="text/javascript"></script>

</head>
<body>
<?php $this->beginBody() ?>

<div class="container">
    <div class="row">
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
                            
                            <li class="menutext"><img src="/img/borderMain.png"><a href="#slider">горячие <br>предложения</a></li>
                            <li><img src="/img/borderMain.png"><a href="#po"><i class="icon-chevron-right"></i>программное <br>обеспечение</a></li>
                            <li><img src="/img/borderMain.png"><a href="#podpiski"><i class="icon-chevron-right"></i>подписки</a></li>
                            <li><img src="/img/borderMain.png"><a href="#uslugi"><i class="icon-chevron-right"></i>услуги</a></li>
                            <li><img src="/img/borderMain.png"><a href="#partnery">наши партнеры</a></li>
                            <li><img src="/img/borderMain.png"><a href="#my">почему мы</a></li>
                            <li><img src="/img/borderMain.png"><a href="#sertif">сертификаты</a></li>
                            <li><img src="/img/borderMain.png"><a href="#preim">преимущества</a></li>
                            <li><img src="/img/borderMain.png"><a href="#command">команда</a></li>
                            <li><img src="/img/borderMain.png"><a href="#calc">калькулятор</a></li>
                            <li><img src="/img/borderMain.png"><a href="#cont">контакты</a><img src="/img/borderMain.png"></li>
                            <li class="tel"><img src="/img/tel.png">  <p>8(812)</p><p class="colorText">336-48-30</p></li>
                            <li> <a href="#" id="btn-ZZ">заказать звонок</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                <!--</div>-->
            </nav>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-4 bs-docs-sidebar hidden-xs">
            <ul class="nav nav-list bs-docs-sidenav affix">
                <li class = "logo"><center><img src="/img/logo.png"><br><img src="/img/ramicon.png"></center></li>
                <li><img src="/img/borderMain.png"><a href="#slider">горячие <br>предложения</a></li>
                <li><img src="/img/borderMain.png"><a href="#po"><i class="icon-chevron-right"></i>программное <br>обеспечение</a></li>
                <li><img src="/img/borderMain.png"><a href="#podpiski"><i class="icon-chevron-right"></i>подписки</a></li>
                <li><img src="/img/borderMain.png"><a href="#uslugi"><i class="icon-chevron-right"></i>услуги</a></li>
                <li><img src="/img/borderMain.png"><a href="#partnery">наши партнеры</a></li>
                <li><img src="/img/borderMain.png"><a href="#my">почему мы</a></li>
                <li><img src="/img/borderMain.png"><a href="#sertif">сертификаты</a></li>
                <li><img src="/img/borderMain.png"><a href="#preim">преимущества</a></li>
                <li><img src="/img/borderMain.png"><a href="#command">команда</a></li>
                <li><img src="/img/borderMain.png"><a href="#calc">калькулятор</a></li>
                <li><img src="/img/borderMain.png"><a href="#cont">контакты</a><img src="/img/borderMain.png"></li>
                <li class="tel"><center><img src="/img/tel.png">  <p>8(812)</p><p class="colorText">336-48-30</p></center></li>
                <li> <a href="#" id="btn-ZZ">заказать звонок</a></li>

            </ul>
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
