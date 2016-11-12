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
                <li>logo</li>
                <li><a href="#dropdowns">ГОРЯЧИЕ ПРЕДЛОЖЕНИЯ</a></li>
                <li><a href="#buttonGroups"><i class="icon-chevron-right"></i>ПРОГРАММНОЕ ОБЕСПЕЧЕНИЕ</a></li>
                <li><a href="#buttonDropdowns"><i class="icon-chevron-right"></i>ПОДПИСКИ</a></li>
                <li><a href="#navs"><i class="icon-chevron-right"></i>УСЛУГИ</a></li>
                <li><a href="#navbar">НАШИ ПАРТНЕРЫ</a></li>
                <li><a href="#breadcrumbs">ПОЧЕМУ МЫ</a></li>
                <li><a href="#pagination">СЕРТИФИКАТЫ</a></li>
                <li><a href="#labels-badges">ПРЕИМУЩЕСТВА</a></li>
                <li><a href="#typography">КОМАНДА</a></li>
                <li><a href="#thumbnails">КАЛЬКУЛЯТОР</a></li>
                <li><a href="#alerts">КОНТАКТЫ</a></li>

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
