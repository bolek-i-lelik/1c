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
                <li><a href="#dropdowns"><i class="icon-chevron-right"></i> Выпадающие списки</a></li>
                <li><a href="#buttonGroups"><i class="icon-chevron-right"></i> Группы кнопок</a></li>
                <li><a href="#buttonDropdowns"><i class="icon-chevron-right"></i> Выпадающие списки кнопок</a></li>
                <li><a href="#navs"><i class="icon-chevron-right"></i> Навигация</a></li>
                <li><a href="#navbar"><i class="icon-chevron-right"></i> Панель навигации</a></li>
                <li><a href="#breadcrumbs"><i class="icon-chevron-right"></i> Навигационные цепочки («Хлебные крошки»)</a></li>
                <li><a href="#pagination"><i class="icon-chevron-right"></i> Разбиение на страницы</a></li>
                <li><a href="#labels-badges"><i class="icon-chevron-right"></i> Ярлыки и бейджи</a></li>
                <li><a href="#typography"><i class="icon-chevron-right"></i> Оформление</a></li>
                <li><a href="#thumbnails"><i class="icon-chevron-right"></i> Миниатюры</a></li>
                <li><a href="#alerts"><i class="icon-chevron-right"></i> Сообщения</a></li>
                <li><a href="#progress"><i class="icon-chevron-right"></i> Индикатор процесса</a></li>
                <li><a href="#misc"><i class="icon-chevron-right"></i> Дополнительно</a></li>
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
