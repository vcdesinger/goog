<!doctype html>
<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head id="www-sitename-com" data-template-set="html5-reset">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<meta name="title" content="" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<meta name="google-site-verification" content="" />
	<meta name="Copyright" content="" />
	<link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/img/favicon.ico" />
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/reset.css" />
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" />
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/modernizr-2.6.2.dev.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.9.1.min.js"></script>

</head>

<body>

<div class="wrapper"><!-- not needed? up to you: http://camendesign.com/code/developpeurs_sans_frontieres -->
	<style>
		.test {
			width:100%;
			height:30px;
			text-align:center;
			background:#efefef;
		}
		.test li {
			display:inline;
		}
		.test a {
			color:#2b2b2b;
			text-decoration:none;
		}
		.test a:hover {
			color:blue;
			text-decoration:underline;
		}
	</style>
	<section class="test">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</section>
	<header>
		<div class="logo">
            <h1><?php echo CHtml::encode(Yii::app()->name); ?></h1>
            <p>
				<?php
					if(Yii::app()->user->checkAccess('3')){
					echo "Romasik!";
				}
				?>
			</p>
            <div class="clear" a></div>
		</div>

        <div class="contact">
            <p class="mail">openproject@gmail.com</p>
            <p class="skype">sourceskmaype</p>
        </div>
        <div class="languate">
            <a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/USA.png" alt="" title=""></a>
            <a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/poland.png" alt="" title=""></a>
            <a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/russia.png" alt="" title=""></a>
        </div>

        <div class="login">
            <?php
            if((Yii::app()->user->checkAccess(3))or (Yii::app()->user->checkAccess(2))or (Yii::app()->user->checkAccess(1))){
                echo "<p>Helo, ".Yii::app()->user->name."</p>";
                $this->widget('zii.widgets.CMenu',array(
                    'items'=>array(
                        array('label'=>'Logout', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                    ),
                ));
                //echo "<p><a href='".Yii::app()->request->baseUrl."/site/logout'>Logout</a></p>";
            }else {
            ?>
            <form id="login-form" action="/index.php?r=site/index" method="post">
                <input type="text" name="LoginForm[username]" placeholder="ваш логин">
                <input type="password" name="LoginForm[password]" placeholder="ваш пароль">
                <input type="hidden" name="LoginForm[rememberMe]" value="1" id="ytLoginForm_rememberMe">
                <input type="submit" name="yt0" value="">
            </form>
            <div class="clear"></div>
            <?php } ?>
        </div>

        <div class="clear" a></div>
	</header>
    <section class="art">
    <section class="art-row">
	<article>

		<!--
		<div class="articl">
            <h1>А можно заработать в Интернете без сайта?</h1>
            <p class="data">24 апреля 2014</p>
            <div class="clear" a></div>
            <img src="img/img.jpg" title="" alt="">
            <p class="discrip">В принципе, тему заработка в Интернет без наличия собственного сайта я рассматривал, когда рассказывал про
                "Эволюцию заработка в Сети". Но в прошлый раз тема касалась в основном копеечных доходов на всяких клик-клубах,
                которые и заработком-то назвать тяжко, так...чисто для того, чтобы на кошельках был не ноль. На деле,
                сегодня у каждого мало-мальски опытного пользователя Интернет есть шанс заработать довольно ощутимые деньги,
                даже не имея собственного сайта. Всё зависит от одного - желания. И сегодня я расскажу Вам о своем первом опыте
                такого заработка. В принципе, тему заработка в Интернет без наличия собственного сайта я рассматривал,
                когда рассказывал про "Эволюцию”.</p>
            <a href="#" class="avtor">Gilzza</a>
            <a href="#" class="coments">0</a>
            <p class="views">12999</p>
            <p class="rating">8.4</p>
            <a href="#" class="read_all">Читать далее</a>
            <div class="clear" a></div>
		</div>
        <div class="articl">
            <h1>А можно заработать в Интернете без сайта?</h1>
            <p class="data">24 апреля 2014</p>
            <div class="clear" a></div>
            <img src="img/img.jpg" title="" alt="">
            <p class="discrip">В принципе, тему заработка в Интернет без наличия собственного сайта я рассматривал, когда рассказывал про
                "Эволюцию заработка в Сети". Но в прошлый раз тема касалась в основном копеечных доходов на всяких клик-клубах,
                которые и заработком-то назвать тяжко, так...чисто для того, чтобы на кошельках был не ноль. На деле,
                сегодня у каждого мало-мальски опытного пользователя Интернет есть шанс заработать довольно ощутимые деньги,
                даже не имея собственного сайта. Всё зависит от одного - желания. И сегодня я расскажу Вам о своем первом опыте
                такого заработка. В принципе, тему заработка в Интернет без наличия собственного сайта я рассматривал,
                когда рассказывал про "Эволюцию”.</p>
            <a href="#" class="avtor">Gilzza</a>
            <a href="#" class="coments">0</a>
            <p class="views">12999</p>
            <p class="rating">8.4</p>
            <a href="#" class="read_all">Читать далее</a>
            <div class="clear"></div>
        </div> -->
		<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
				'links'=>$this->breadcrumbs,
			)); ?><!-- breadcrumbs -->
		<?php endif?>
		<div class="articl">
            <h1>А можно заработать в Интернете без сайта?</h1>
            <p class="data">24 апреля 2014</p>
            <div class="clear" a></div>
            <img src="img/img.jpg" title="" alt="">
            <p class="discrip"><?php echo $content; ?></p>
			<a href="#" class="avtor">Gilzza</a>
            <a href="#" class="coments">0</a>
            <p class="views">12999</p>
            <p class="rating">8.4</p>
            <a href="#" class="read_all">Читать далее</a>
            <div class="clear"></div>
        </div>
		<div class="clear"></div>

        <div class="articl_bottom">
            <p class="back"><a href="#">Предыдущие</a> </p>
            <p class="next"><a href="#">Следующие</a></p>
            <div class="clear" a></div>
            <div class="but"><a href="#">Учимся работать с <span>YiiFramework</span></a></div>

        </div>

	</article>
	<aside>
        <div class="menu">
            <div class="top" >
                <h1>ПОИСК</h1>
            </div>
            <div class="sidebar_content">
                <form action="" name="">
                    <input type="text" name="" placeholder="мне повезет">
                    <input type="submit"value="">
                </form>
            </div>
            <div class="bottom">

            </div>
        </div>
        <div class="menu">
            <div class="top">
                <h1>Разделы</h1>
            </div>
            <div class="sidebar_content">
                <p class="habs"><a href="#" >Optimization</a> <sup>(93)</sup></p>
                <p class="habs"><a href="#" >JavaScript</a> <sup>(17)</sup></p>
                <p class="habs"><a href="#" >Firebug </a><sup>(93)</sup></p>
                <p class="habs"><a href="#" >Drupal </a><sup>(17)</sup></p>
                <p class="habs"><a href="#" >PhpStorm </a><sup>(93)</sup></p>
                <p class="habs"><a href="#" >CodeIgniter </a><sup>(17)</sup></p>
                <p class="habs"><a href="#" >NetBeans </a><sup>(93)</sup></p>
                <p class="habs"><a href="#" >GitHub </a><sup>(32)</sup></p>
                <div class="clear"></div>
            </div>

            <div class="bottom">

            </div>
        </div>
        <div class="clear"></div>
        <div class="menu">
            <div class="top">
                <h1>Свежие записи</h1>
            </div>
            <div class="sidebar_content">
                <p class="new_zap"><a href="#">С чего начать изучение Python?</a></p>
                <p class="new_zap"><a href="#">Вступительное слово программиста. Рубрикатор</a></p>
                <p class="new_zap"><a href="#">Долгожданный переезд!</a></p>
                <p class="new_zap"><a href="#">Python: начало. Как установить Python в Windows и Linux?</a></p>
                <p class="new_zap"><a href="#">Новый дизайн на блоге программиста</a></p>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
            <div class="bottom">

            </div>
        </div>
	</aside>
    <div class="clear" a></div>
    </section>
    </section>

</div>
<div class="clear" a></div>
<footer>
    <div class="footer_content">
        <p>Copyright &copy; <?php echo date('Y'); ?> by My Company. All Rights Reserved. <?php echo Yii::powered(); ?></p>
    </div>
</footer>
<script>
    function setEqualHeight(columns)
    {
        var tallestcolumn = 0;
        columns.each(
                function()
                {
                    currentHeight = $(this).height();
                    if(currentHeight > tallestcolumn)
                    {
                        tallestcolumn = currentHeight;
                    }
                }
        );
        columns.height((tallestcolumn));
    }
    $(document).ready(function() {
        setEqualHeight($(".art-row article, .art-row aside "));
    });
</script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/functions.js"></script>

