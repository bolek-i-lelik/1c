<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">
<div class="col-lg-12"><a ><h2>Горячие предложения</h2></a>
<div class="row">
    	
    	<div id="carousel" class="carousel slide">
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                            <div class="item active" >
                                <!--<img src="/img/slide.png">
                                <!--<div class="carousel-caption">
                                	Быстро и эффективно установим и настроим программы 1с
                                </div>-->
                                <div class="row">
                                	<div class="col-lg-6">
                                        <img src="/img/slide.png">
                                    </div>
                                    <div class="col-lg-6 textSlider" style="position:relative;">
                                        <div class="col-lg-12"><img src="/img/bord1.png"></div>
                                        <div class="col-lg-12 "><p class="textBlocMain">Быстро и эффективно установим и настроим программы 1с</p></div>
                                        <div closs="col-lg-12"><img src="/img/bord2.png"></div>
                                        <div class="col-lg-8 textBlocSod">С учетом особенностей ваших бизнес-процессов и задач</div>
                                        <div class="col-lg-6"><a href="#" id="btn-ZZSLD">заказать</a></div>
                                        <div class="col-lg-6"><a href="#">Подробнее</a></div>
                                    </div>
                                </div>
                                <!--<img src="/img/slide.png">
						        <div class="carousel-caption">
                                	Быстро и эффективно установим и настроим программы 1с
                                </div>  -->
                                <!--<div class="carousel-caption-opis">
                                	С учетом особенностей ваших бизнес-процессов и задач
                                </div>        -->                 
						    </div>
                            <div class="item" >
                                <div class="row">
                                    <div class="col-lg-6">
                                        <img src="/img/slide.png">
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="col-lg-12 textBlocMain">Быстро и эффективно установим и настроим программы 1с</div>
                                        <div class="col-lg-12">С учетом особенностей ваших бизнес-процессов и задач</div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <img src="/img/slide.png">
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="col-lg-12 textBlocMain">Быстро и эффективно установим и настроим программы 1с</div>
                                        <div class="col-lg-12">С учетом особенностей ваших бизнес-процессов и задач</div>
                                    </div>
                                </div>
                            </div>
                </div>
                <a class="left carousel-control" href="#carousel" data-slide="prev">
                    <!--<span class="glyphicon glyphicon-chevron-left"></span>-->
                    <img src="/img/prev.png" class="glyphicon glyphicon-chevron-left">
                </a>
                <a class="right carousel-control" href="#carousel" data-slide="next">
                    <!--<span class="glyphicon glyphicon-chevron-right"></span>-->
                    <img src="/img/nextOrang.png" class="glyphicon glyphicon-chevron-right">
                </a>
            </div>
            <div style="min-height: 50px;"></div>
    </div>
</div>
<!-- Программное обеспечение -->
<div class="col-lg-12">
    <a  name="po"><h2>программное обеспечение</h2></a>
</div>
<div class="row">
    <div class="col-lg-6" style="padding: 0;">
        <table width="450">
            <tr>
                <td style="vertical-align: top;">
                    <img src="/img/po/1.png" width="224" align="left" valign="top"> 
                </td>
                <td rowspan="2">
                    <img src="/img/po/24.png" width="224" height="388" align="right">
                </td>
            </tr>
            <tr>
                <td style="vertical-align: bottom;">
                    <img src="/img/po/5.png" width="224" align="left" valign="bottom">
                </td>
            </tr>
        </table>
    </div>
    <div class="col-lg-6"  style="padding: 0;">
        <table>
            <tr>
                <td colspan="2">
                    <img src="/img/po/3.png" width="450">
                </td>
            </tr>
            <tr height="194">
                <td style="vertical-align: bottom;">
                    <img src="/img/po/6.png" width="223">
                </td>
                <td style="vertical-align: bottom;">
                    <img src="/img/po/4.png" width="223" align="right" height="191">
                </td>
            </tr>
        </table>
    </div>
</div>
<!-- Подписки -->
<div>
    <a name="podpiski"><h2>подписки</h2></a>
</div>
<div class="row">
    <div class="col-lg-6"  style="padding: 0;">
        <table width="454" height="395">
            <tr>
                <td>
                    <img src="/img/podpiski/1.png" width="225">
                </td>
                <td>
                    <img src="/img/podpiski/2.png" width="225">
                </td>
            </tr>
            <tr>
                <td>
                    <img src="/img/podpiski/3.png" width="225">
                </td>
                <td>
                    <img src="/img/podpiski/4.png" width="225">
                </td>
            </tr>
        </table>
    </div>
    <div class="col-lg-6"  style="padding: 0;">
    <img src="/img/podpiski/5.png"  height="395">
    </div>
</div>
<div>
    <a  name="uslugi"><h2>услуги</h2></a>
</div>
<div class="row">
    <div class="col-lg-6" style="padding: 0;">
        <img src="/img/uslugi/1.png" width="454">
    </div>
    <div class="col-lg-6" style="padding: 0;">
        <img src="/img/uslugi/2.png" width="454">
    </div>
</div>
<div class="row">
    <div class="col-lg-12" style="padding: 0;">
        <img src="/img/uslugi/3.png" width="907">
    </div>
</div>

    
	
<div>
    <a name="partnery"><h2>партнеры</h2></a>
</div>
<div class="row">
    <div class="col-lg-12">
    	<img src="/img/partnery.png" width="907">
    </div>
</div>
<div>
    <a name="my"><h2>почему мы</h2></a>
</div>
<div class="row">
    <div class="col-lg-12">
        <img src="/img/my.png" width="907">
    </div>
</div>

	
<div>
    <a name="sertif"><h2>наши сертификаты</h2></a>
</div>
<div class="row">
    <div class="col-lg-12">
        <img src="/img/sert.png" width="907">
    </div>
</div>
<div>
    <a name="preim"><h2>наши преимущества</h2></a>
</div>
<div class="row">
    <div class="col-lg-12">
        <img src="/img/preim.png" width="907">
	</div>
</div>
<div>
    <a name="command"><h2>наша команда</h2></a>
</div>
<div class="row">
    <div class="col-lg-12">
        <img src="/img/command.png" width="907">
	</div>
</div>
<div class="row">
    <div class="col-lg-12">
		<img src="/img/obrZ.png" width="300">
</div>
<div class="row">
    <div class="col-lg-12">
        <img src="/img/otz.png" width="907">
    </div>
</div>
<div>
    <a name="calc"><h2>калькулятор</h2></a>
</div>
<div class="row">
    <div class="col-lg-12">
        <img src="/img/calc.png" width="907">
	</div>
</div>
<div class="row">
    <div class="col-lg-12">
		<img src="/img/bp.png" width="907">
	</div>
</div>
<div>
    <a name="cont"><h2>контакты</h2></a>
</div>
<div class="row">
    <div class="col-lg-12">
	   <img src="/img/cont.png" width="907">
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<img src="/img/map.png" width="907">
	</div>
</div>
